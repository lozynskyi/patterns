<?php

namespace App\Subscription\Contracts;

interface Subscription
{
    public function price();
    public function description();
}