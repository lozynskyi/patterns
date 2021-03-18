<?php

namespace App\Subscription;

use App\Subscription\Abstracts\SubscriptionFeature;

class SupportFeature extends SubscriptionFeature
{

    public function price(): int
    {
        return $this->subscription->price() + 1;
    }

    public function description(): string
    {
        return $this->subscription->description() . ' + Support';
    }
}