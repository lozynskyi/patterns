<?php

use App\Inventory;
use App\InventoryList;

require 'vendor/autoload.php';

var_dump('Iterator Pattern');

$inventoryList = new InventoryList();

$inventoryList->add(new Inventory('Document one', 'Bob Dylan'));
