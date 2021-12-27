<?php

use App\PspTransaction;
use App\BankTransaction;

require 'vendor/autoload.php';

var_dump('Prototype Pattern');

$pspProto = new PspTransaction();
$bankProto = new BankTransaction();

$transaction1 = clone $pspProto;
$transaction1->setDescription('Psp Description from order');
echo('Transaction 1 topic: '.$transaction1->getTopic());
echo('Transaction 1 description: '.$transaction1->getDescription());
echo('\n');
