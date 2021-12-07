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

    public function count(): int
    {
        return count($this->inventory);
    }

    public function current(): Inventory
    {
        return $this->inventory[$this->currentIndex];
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->inventory[$this->currentIndex]);
    }
}
