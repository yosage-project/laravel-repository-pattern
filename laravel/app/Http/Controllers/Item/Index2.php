<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Infrastructures\Interfaces\Item\IGetItemsRepository;

class Index2 extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(IGetItemsRepository $getItemsRepository)
    {
        // Repositoryを使ってitemsテーブルから全てのデータを取得
        $items = $getItemsRepository->getItems();
        return view('items.index', compact('items'));
    }
}
