<?php

namespace App\Repository\WebSiteRepository;

use App\Models\WebSite;

class WebSiteRepository
{
    protected $model;

    public function __constructor(WebSite $model)
    {
        $this->model = $model;
    }
}
