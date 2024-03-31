<?php

namespace App\Infrastructures\Interfaces\Item;

interface IGetItemsRepository
{
    public function getItems(): array;
}
