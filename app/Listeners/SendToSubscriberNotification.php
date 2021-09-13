<?php

namespace App\Listeners;

use App\Events\PublishedNewPost;
use App\Services\MailingJobService\MailingJobService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendToSubscriberNotification
{
    protected $mailingJobService;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(MailingJobService $mailing_job_service)
    {
        $this->mailingJobService = $mailing_job_service;
    }

    /**
     * Handle the event.
     *
     * @param  PublishedNewPost  $event
     * @return void
     */
    public function handle(PublishedNewPost $event)
    {
        $this->mailingJobService->createJobToSpreadThePostAllSubscribers($event->post);
    }
}
