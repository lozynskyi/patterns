<?php

use App\Service;
use App\NullLogger;

require 'vendor/autoload.php';

$service = new Service(new NullLogger());
$service->action();
