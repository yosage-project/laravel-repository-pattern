<?php

namespace App\Infrastructures\Repositories\Eloquent\Item;

use App\Infrastructures\Interfaces\Item\IGetItemsRepository;
use Illuminate\Support\Facades\DB;

class GetItemsRepository implements IGetItemsRepository
{
    public function getItems(): array
    {
        return DB::table('items')->get()->toArray();
    }
}
