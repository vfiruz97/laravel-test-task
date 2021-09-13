<?php

namespace App\Repositories\SubscriberRepository;

use App\Contracts\Repositories\SubscriberRepositoryContact;
use App\Models\Subscriber;

class SubscriberRepository extends SubscriberRepositoryContact
{
    protected $subscriber;

    public function __construct(Subscriber $subscriber_m)
    {
        $this->subscriber = $subscriber_m;
    }

    public function create(array $post)
    {
        return $this->subscriber->create($post);
    }

    public function getSubscribersByWebSiteId(int $id)
    {
        return $this->subscriber->where('web_site_id', $id)->get();
    }
}
