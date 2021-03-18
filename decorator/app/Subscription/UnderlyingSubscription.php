<?php

namespace App\Subscription;

use App\Subscription\Contracts\Subscription;

class UnderlyingSubscription implements Subscription
{

    public function price(): int
    {
        return 5;
    }

    public function description(): string
    {
        return 'Basic Subscription description';
    }
}