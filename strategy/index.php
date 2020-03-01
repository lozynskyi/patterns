<?php

require 'vendor/autoload.php';

$config = new \App\Config\Config(
    new \App\Config\Parser\ArrayParser()
);

$config->load('config/database.php');

var_dump($config->get('mysql.host'));