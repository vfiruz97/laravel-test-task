<?php

namespace App\Contracts\Repositories;

abstract class PostRepositoryContact
{
    // insert to db
    abstract public function create(array $data);
}
