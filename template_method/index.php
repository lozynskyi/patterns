<?php

require 'vendor/autoload.php';

var_dump('Start template method pattern.');


$linkedin = new App\Social\Linkedin();
$linkedin->logIn('username', 'password');
