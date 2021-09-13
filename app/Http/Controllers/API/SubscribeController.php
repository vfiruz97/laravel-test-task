<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriberRequest;
use App\Services\SubscriberService\SubscriberService;

class SubscribeController extends Controller
{
    protected $subscriberService;

    public function __construct(SubscriberService $subscriber_service)
    {
        $this->subscriberService = $subscriber_service;
    }

    public function create(SubscriberRequest $request)
    {
        return $this->subscriberService->create($request->all());
    }
}
