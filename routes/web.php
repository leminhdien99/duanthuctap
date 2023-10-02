<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\About\AboutController;
use App\Http\Controllers\Client\Contact\ContactController;
use App\Http\Controllers\Client\ShopWishlist\ShopWishlistController;
use App\Http\Controllers\Client\BlogDetail\BlogDetailController;

Route::group(['prefix' => '/'], function (){
    Route::get('', [HomeController::class, 'index'])->name('index');
    Route::group(['prefix' => 'cart'], function (){
        Route::get('list', [CartController::class, 'list'])->name('listCart');
        Route::get('add', [CartController::class, 'add'])->name('addCart');
        Route::get('delete', [CartController::class, 'delete'])->name('deleteCart');

    });
    Route::get('about', [AboutController::class, 'about'])->name('about');
    Route::get('contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('wish-list', [ShopWishlistController::class, 'wishlist'])->name('wishlist');
    Route::get('blog-detail', [BlogDetailController::class, 'blogdetail'])->name('blogdetail');
    Route::get('forgot-password', [ForgotController::class, 'forgot'])->name('forgot');
    Route::get('reset-password', [ForgotController::class, 'reset'])->name('resetPassword');
});

