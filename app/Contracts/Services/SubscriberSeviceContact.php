<?php

namespace App\Contracts\Services;

abstract class SubscriberSeviceContact
{
    // insert to db
    abstract public function create(array $data);
    abstract public function getSubscribersByWebSiteId(int $id);
}
