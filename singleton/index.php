<?php

use App\Config;

require 'vendor/autoload.php';

$config = Config::getInstance();
$anotherConfig = Config::getInstance();

var_dump($config === $anotherConfig);