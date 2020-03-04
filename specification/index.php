<?php

require 'vendor/autoload.php';

$validator = new \App\Validator\Validator;

$validator->isString()->isGreaterThen(10);

var_dump($validator->rules);