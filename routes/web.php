<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\Cart\CartController;




Route::group(['prefix' => '/'], function (){
    Route::get('', [HomeController::class, 'index']);
    Route::group(['prefix' => 'cart'], function (){
        Route::get('list', [CartController::class, 'list'])->name('listCart');
        Route::get('add', [CartController::class, 'add'])->name('addCart');
        Route::get('delete', [CartController::class, 'delete'])->name('deleteCart');

    });
});
