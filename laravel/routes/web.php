<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', \App\Http\Controllers\Item\Index::class);
Route::get('/items-2', \App\Http\Controllers\Item\Index2::class);
