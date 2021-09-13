<?php

namespace App\Services\SubscriberService;

use App\Contracts\Services\SubscriberSeviceContact;
use App\Repositories\SubscriberRepository\SubscriberRepository;

class SubscriberService extends SubscriberSeviceContact
{
    protected $subscriberRepository;

    public function __construct(SubscriberRepository $subscriber_epository)
    {
        $this->subscriberRepository = $subscriber_epository;
    }

    public function create(array $post)
    {
        return $this->subscriberRepository->create($post);
    }

    public function getSubscribersByWebSiteId(int $id)
    {
        return $this->subscriberRepository->getSubscribersByWebSiteId($id);
    }
}
