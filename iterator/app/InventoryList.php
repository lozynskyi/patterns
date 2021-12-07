<?php

declare(strict_types=1);

namespace App;

use Countable;
use Iterator;

class InventoryList implements Countable, Iterator
{
    /**
     * @var Inventory[]
     */
    private array $inventory = [];
    private int $currentIndex = 0;

    public function addInventory(Inventory $inventory)
    {
        $this->inventory[] = $inventory;
    }


}
