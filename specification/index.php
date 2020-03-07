<?php

require 'vendor/autoload.php';

$validator = new \App\Validator\Validator;

$validator->withInput('test')->isString()->isGreaterThen(3);

var_dump($validator->isValid());