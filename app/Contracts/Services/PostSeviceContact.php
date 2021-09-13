<?php

namespace App\Contracts\Services;

abstract class PostSeviceContact
{
    // insert to db and then call event
    abstract public function createAndNotify(array $data);
}
