<?php

require 'vendor/autoload.php';

$youtube = new \App\YoutubeAdapter(new \App\YouTube());
var_dump($youtube->getViews('abc'));