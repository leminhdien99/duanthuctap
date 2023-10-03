<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\About\AboutController;
use App\Http\Controllers\Client\Contact\ContactController;
use App\Http\Controllers\Client\ShopWishlist\ShopWishlistController;
use App\Http\Controllers\Client\BlogDetail\BlogDetailController;
use App\Http\Controllers\Client\Product\ProductController;
use App\Http\Controllers\Client\Product\ProductDealsController;
use App\Http\Controllers\Client\Blog\BlogController;
use App\Http\Controllers\Client\Account\AccountController;
use App\Http\Controllers\Client\Pages\PolicyController;
use App\Http\Controllers\Client\Pages\Product\DetailsController;
use App\Http\Controllers\Client\ErrorController;
use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\Client\CheckoutController;

Route::group(['prefix' => '/'], function (){
    Route::get('', [HomeController::class, 'index'])->name('index');
    Route::group(['prefix' => 'cart'], function (){
        Route::get('list', [CartController::class, 'list'])->name('listCart');
        Route::get('add', [CartController::class, 'add'])->name('addCart');
        Route::get('delete', [CartController::class, 'delete'])->name('deleteCart');
    });

    Route::group(['prefix' => 'product'], function (){
        Route::get('/list', [ProductController::class, 'product'])->name('product');
        Route::get('/deals', [ProductDealsController::class, 'product_deals'])
             ->name('product_deals');
    });
    Route::get('details', [DetailsController::class, 'Details'])->name('details');
    Route::get('policy', [PolicyController::class, 'Policy'])->name('policy');
    Route::get('404', [ErrorController::class, 'enror'])->name('error');
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout');

    Route::get('blog', [BlogController::class, 'blog'])->name('blog');
    Route::get('account', [AccountController::class, 'account'])->name('account');
    Route::get('about', [AboutController::class, 'about'])->name('about');
    Route::get('contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('wish-list', [ShopWishlistController::class, 'wishlist'])->name('wishlist');
    Route::get('blog-detail', [BlogDetailController::class, 'blogdetail'])->name('blogdetail');
    Route::get('forgot-password', [ForgotController::class, 'forgot'])->name('forgot');
    Route::get('reset-password', [ForgotController::class, 'reset'])->name('resetPassword');
});