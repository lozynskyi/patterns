<?php

use App\BaseObserver\MailingListSignup;
use App\BaseObserver\{SubscribeUserToService, UpdateMailingStatusInDatabase};

require 'vendor/autoload.php';

$user = new \App\User();

$event = new MailingListSignup($user);
$event->attach(new UpdateMailingStatusInDatabase());
$event->attach(new SubscribeUserToService());

$event->notify();