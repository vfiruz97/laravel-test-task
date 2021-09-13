<?php

namespace App\Contracts\Services;

use App\Models\Post;

abstract class MailingJobSeviceContact
{
    abstract public function createJobToSpreadThePostAllSubscribers(Post $data);
    abstract public function getJobsInStatus(string $status);
}
