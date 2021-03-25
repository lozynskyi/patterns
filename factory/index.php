<?php

use App\Configuration;

require 'vendor/autoload.php';

$config = new Configuration();

var_dump($config->get('upload.services.s3.secret'));