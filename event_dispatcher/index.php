<?php

use App\Core\Events\Dispatcher;
use App\Models\User;

require_once 'vendor/autoload.php';

echo ('event dispatch start');

$user = new User();
$user->id = 1;
$user->email = 'some@email.com';

$dispatcher = new Dispatcher();
