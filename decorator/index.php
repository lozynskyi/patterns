<?php

use App\Subscription\AdditionalSpaceFeature;
use App\Subscription\UnderlyingSubscription;

require 'vendor/autoload.php';

$sub = new AdditionalSpaceFeature(new UnderlyingSubscription());

var_dump($sub->description());
