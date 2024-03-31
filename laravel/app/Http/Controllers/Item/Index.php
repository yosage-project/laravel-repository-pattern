<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;

class Index extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        // Itemモデルから全てのデータを取得
        // データの取得方法が変わったときにController内のロジックもガラッと変わることになる
        $items = Item::all()->toArray();
        return view('items.index', compact('items'));
    }
}
