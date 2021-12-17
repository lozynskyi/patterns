<?php

use App\Service;
use App\NullLogger;

require 'vendor/autoload.php';

$service = new Service(new NullLogger());
$service->action();

$service = new Service(new MimicLogger());
$this->action('We are in App\Service::action');
$service->action();
