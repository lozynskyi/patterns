<?php

use App\Subscription\{AdditionalSpaceFeature, UnderlyingSubscription, SupportFeature};

require 'vendor/autoload.php';

$sub = new SupportFeature(new AdditionalSpaceFeature(new UnderlyingSubscription()));

var_dump('Price: ' . $sub->price());
var_dump('Description: ' . $sub->description());
