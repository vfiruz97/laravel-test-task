<?php

namespace App\Repositories\MailingJobRepository;

use App\Contracts\Repositories\MailingJobRepositoryContact;
use App\Models\MailingJob;

class MailingJobRepository extends MailingJobRepositoryContact
{
    protected $mailingJob;

    public function __construct(MailingJob $mailing_job_m)
    {
        $this->mailingJob = $mailing_job_m;
    }

    public function create(array $post)
    {
        return $this->mailingJob->create($post);
    }
}
