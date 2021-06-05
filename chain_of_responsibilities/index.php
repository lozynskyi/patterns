<?php

use App\{FiscalHandler, LegalHandler, TaxHandler, Transaction};

require 'vendor/autoload.php';

echo('Init chain ... \n');

$tax = new  TaxHandler();
$fiscal = new FiscalHandler();
$legal = new LegalHandler();

$transaction = new Transaction();

$tax->setHandler($fiscal);
$fiscal->setHandler($legal);

$tax->process($transaction);

var_dump('Chain ended!');
