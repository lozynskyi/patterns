<?php

use App\Inventory;
use App\InventoryList;

require 'vendor/autoload.php';

var_dump('Iterator Pattern');

$inventoryList = new InventoryList();

$inventoryList->add(new Inventory('Document one', 'Bob Dylan'));
$inventoryList->add(new Inventory('Document two', 'John Dow'));
$inventoryList->add(new Inventory('Document thre', 'Olvap Iyksnyzol'));

$inventorys = [];

foreach ($inventoryList as $inventory) {
    $inventorys[] = $book->getAuthorAndTitle();
}

print_r($inventorys);

$inventoryList->removeInvontory(new Inventory('Document thre', 'Olvap Iyksnyzol'));
print_r($inventorys);
