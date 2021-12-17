<?php

use App\Service;
use App\NullLogger;

require 'vendor/autoload.php';

$service = new Service(new NullLogger());
$service->action('');

$service = new Service(new MimicLogger());
$service->action('We are in App\Service::action');
