<?php

namespace App\Console\Commands;

use App\Models\MailingJob;
use App\Services\MailingJobService\MailingJobService;
use Exception;
use Illuminate\Console\Command;

class SendEmailToSubscribers extends Command
{
    protected $mailingJobService;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email_to_subscribers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send new articles to subscribers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(MailingJobService $mailing_service)
    {
        $this->mailingJobService = $mailing_service;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $mailling_jobs = $this->mailingJobService->getJobsInStatus(MailingJob::STATUS_PANDING);

        foreach ($mailling_jobs as $m_job) {
            try {

                // send email --->

                $m_job->status = MailingJob::STATUS_SUCCESS;
                $m_job->save();
            } catch (Exception $e) {
                // bugging
            }
        }

        return 0;
    }
}
