<?php

use App\Core\Events\Dispatcher;
use App\Models\User;
use \App\Listeners\User\UpdateSignInDate;
use \App\Listeners\User\SendSignInEmail;
use \App\Events\User\UserSignedIn;

require_once 'vendor/autoload.php';

$user = new User();
$user->id = 1;
$user->email = 'some@email.com';

$dispatcher = new Dispatcher;

$dispatcher->addListener('UserSignedIn', new UpdateSignInDate());

$dispatcher->addListener('UserSignedIn', new SendSignInEmail());

$dispatcher->dispatch(new UserSignedIn($user));
