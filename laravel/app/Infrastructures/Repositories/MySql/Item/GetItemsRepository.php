<?php

namespace App\Infrastructures\Repositories\MySql\Item;

use App\Infrastructures\Interfaces\Item\IGetItemsRepository;
use Illuminate\Support\Facades\DB;

class GetItemsRepository implements IGetItemsRepository
{
    public function getItems(): array
    {
        echo 'SQLを利用したデータ取得';
        $results = DB::table('items')->get()->toArray();
        return json_decode(json_encode($results), true);
    }
}
