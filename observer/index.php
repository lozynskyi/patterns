<?php

require 'vendor/autoload.php';

use App\BaseObserver\{
    MailingListSignup,
    Login,
    SubscribeUserToService,
    UpdateLastLoginStatusInDatabase,
    UpdateMailingStatusInDatabase
};
use App\BaseObserver\Contracts\Subject;

use \App\SplObserver\{
    MailingListSignupEvent,
    UpdateMailingStatusInDatabaseObserver
};


$user = new \App\User();

$events = [
    (new MailingListSignup($user))
        ->attach(new UpdateMailingStatusInDatabase())
        ->attach(new SubscribeUserToService()),
    (new Login($user))
        ->attach(new UpdateLastLoginStatusInDatabase())
];

//iterate thru all events and execute notify
array_walk($events, function (Subject $event) {$event->notify();});


//second part with Spl implementation
$event = new MailingListSignupEvent();
$event->attach(new UpdateMailingStatusInDatabaseObserver());
$event->notify();