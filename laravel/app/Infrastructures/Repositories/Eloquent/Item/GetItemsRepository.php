<?php

namespace App\Infrastructures\Repositories\Eloquent\Item;

use App\Infrastructures\Interfaces\Item\IGetItemsRepository;
use App\Models\Item;
use Illuminate\Support\Collection;

class GetItemsRepository implements IGetItemsRepository
{
    public function getItems(): array
    {
        echo 'Eloquentを利用したデータ取得';
        return Item::all()->toArray();
    }
}
