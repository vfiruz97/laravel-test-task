<?php

namespace App\Contracts\Repositories;

abstract class SubscriberRepositoryContact
{
    // insert to db
    abstract public function create(array $data);
    abstract public function getSubscribersByWebSiteId(int $id);
}
