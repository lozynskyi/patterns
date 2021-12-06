<?php

use App\Social\Instagram;
use App\Social\Linkedin;

require 'vendor/autoload.php';

var_dump('Start template method pattern.');


$linkedin = new Linkedin('username', 'password');

if($linkedin->logIn()) {
    $linkedin->sendData('Message Post from Linkedin...');
    $linkedin->logOut();
}
  
$instagram = new Instagram('username', 'password');

if($instagram->logIn();
    $instagram->sendData('Message Post from Instagram...');
    $instagram->logOut();
}
