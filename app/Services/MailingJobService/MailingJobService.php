<?php

namespace App\Services\MailingJobService;

use App\Contracts\Services\MailingJobSeviceContact;
use App\Models\MailingJob;
use App\Models\Post;
use App\Repositories\MailingJobRepository\MailingJobRepository;
use App\Services\SubscriberService\SubscriberService;

class MailingJobService extends MailingJobSeviceContact
{
    protected $subscriberService;
    protected $mailingJobRepository;

    public function __construct(SubscriberService $subscriber_service ,MailingJobRepository $mailing_job_repository)
    {
        $this->subscriberService = $subscriber_service;
        $this->mailingJobRepository = $mailing_job_repository;
       
    }

    public function create(array $mailing_job)
    {
        return $this->mailingJobRepository->create($mailing_job);
    }

    public function createJobToSpreadThePostAllSubscribers(Post $post)
    {
        $subscribers = $this->subscriberService->getSubscribersByWebSiteId($post->web_site_id);

        foreach($subscribers as $subscriber){
            $data = [
                'email_to' => $subscriber->email,
                'post_id' => $post->id,
                'status' => MailingJob::STATUS_PANDING,
            ];
            $this->create($data);
        }
    }
}
