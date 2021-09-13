<?php

namespace App\Contracts\Repositories;

abstract class MailingJobRepositoryContact
{
    // insert to db
    abstract public function create(array $data);
}
