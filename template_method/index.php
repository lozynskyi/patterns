<?php

use App\Social\Instagram;
use App\Social\Linkedin;

require 'vendor/autoload.php';

var_dump('Start template method pattern.');


$linkedin = new Linkedin();
if ($linkedin->logIn('username', 'password')) {
  $linkedin->sendData('Message Post');
  $linkedin->logOut();
}
  
$instagram = new Instagram();
$instagram->logIn('username', 'password');

