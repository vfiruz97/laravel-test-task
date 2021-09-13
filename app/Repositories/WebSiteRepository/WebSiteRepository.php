<?php

namespace App\Repositories\WebSiteRepository;

use App\Contracts\Repositories\WebSiteRepositoryContact;
use App\Models\WebSite;

class WebSiteRepository extends WebSiteRepositoryContact
{
    protected $model;

    public function __construct(WebSite $model)
    {
        $this->model = $model;
    }
}
