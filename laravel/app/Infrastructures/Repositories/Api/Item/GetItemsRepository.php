<?php

namespace App\Infrastructures\Repositories\Api\Item;

use App\Infrastructures\Interfaces\Item\IGetItemsRepository;

class GetItemsRepository implements IGetItemsRepository
{
    public function getItems(): array
    {
        echo 'APIを利用したデータ取得';
        $curl = curl_init('http://nginx/api/items/list.json');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $res = curl_exec($curl);
        return json_decode($res, true);
    }
}
