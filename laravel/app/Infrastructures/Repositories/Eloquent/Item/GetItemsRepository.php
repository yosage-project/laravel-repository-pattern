<?php

namespace App\Infrastructures\Repositories\Eloquent\Item;

use App\Infrastructures\Interfaces\Item\IGetItemsRepository;
use App\Models\Item;
use Illuminate\Support\Collection;

class GetItemsRepository implements IGetItemsRepository
{
    public function getItems(): array
    {
        return Item::all()->toArray();
    }
}
