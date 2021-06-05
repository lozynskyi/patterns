<?php

use App\{FiscalHandler, LegalHandler, TaxHandler, Transaction};

require 'vendor/autoload.php';

var_dump('Init chain ...');

$tax = new  TaxHandler();
$fiscal = new FiscalHandler();
$legal = new LegalHandler();

$transaction = new Transaction();

$tax->setHandler($fiscal);
$fiscal->setHandler($legal);

$tax->process($transaction);

var_dump('Chain ended!');
