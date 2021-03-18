<?php

require 'vendor/autoload.php';

//Array Parser
$config = new \App\Config\Config(
    new \App\Config\Parser\ArrayParser()
);
$config->load('config/database.php');
var_dump($config->get('mysql.host'));

//Json Parser
$config = new \App\Config\Config(
    new \App\Config\Parser\JsonParser()
);
$config->load('config/database.json');
var_dump($config->get('mysql.port'));