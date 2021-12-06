<?php

use App\Social\Instagram;
use App\Social\Linkedin;

require 'vendor/autoload.php';

var_dump('Start template method pattern.');


$linkedin = new Linkedin();
$linkedin->logIn('username', 'password');

$instagram = new Instagram();
$instagram->logIn('username', 'password');
