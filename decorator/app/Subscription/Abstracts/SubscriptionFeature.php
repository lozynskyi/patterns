<?php

namespace App\Subscription\Abstracts;

use App\Subscription\Contracts\Subscription;

abstract class SubscriptionFeature implements Subscription
{
    protected  $subscription;

    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    abstract public function price();
    abstract public function description();
}