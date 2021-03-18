<?php

namespace App\Subscription;

use App\Subscription\Abstracts\SubscriptionFeature;

class AdditionalSpaceFeature extends SubscriptionFeature
{

    public function price(): int
    {
       return $this->subscription->price() + 3;
    }

    public function description(): string
    {
        return $this->subscription->description() . ' + Additional Space!';
    }
}