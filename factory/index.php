<?php

use App\AdapterFactory;
use App\Configuration;
use App\UploaderFactory;

require 'vendor/autoload.php';

$config = new Configuration();

$factory = new UploaderFactory(new AdapterFactory());
$uploader = $factory->make($config);

var_dump($uploader);