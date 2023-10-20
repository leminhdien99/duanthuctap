<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Pages\HomeController;
use App\Http\Controllers\Admin\Dashboard\ViewDashboardController;
use App\Http\Controllers\Admin\Category\AddCategoryController;
use App\Http\Controllers\Admin\Category\DeleteCategoryController;
use App\Http\Controllers\Admin\Category\EditCategoryController;
use App\Http\Controllers\Admin\Category\ListCategoryController;

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
use App\Http\Controllers\Client\Account\ForgetPasswordController;
use App\Http\Controllers\Client\Account\LoginController;
use App\Http\Controllers\Client\Account\RegisterController;
use App\Http\Controllers\Client\Cart\CartController;
use App\Http\Controllers\Client\CheckoutController;

// User and Voucher
use App\Http\Controllers\Admin\User\AddUserController;
use App\Http\Controllers\Admin\User\DeleteUserController;
use App\Http\Controllers\Admin\User\EditUserController;
use App\Http\Controllers\Admin\User\ListUserController;
use App\Http\Controllers\Admin\Voucher\AddVoucherController;
use App\Http\Controllers\Admin\Voucher\DeleteVoucherController;
use App\Http\Controllers\Admin\Voucher\EditVoucherController;
use App\Http\Controllers\Admin\Voucher\ListVoucherController;


Route::group(['prefix' => 'admin'], function (){
    Route::get('/', [ViewDashboardController::class, 'dashboar'])->name('dashboar');
    Route::group(['prefix' => 'category'], function (){
        Route::get('/list', [ListCategoryController::class, 'listCategory'])->name('listCategory');
        Route::get('/delete', [DeleteCategoryController::class, 'deleteCategory'])
             ->name('deleteCategory');
        Route::get('/edit', [EditCategoryController::class, 'editFormCategory'])
             ->name('editCategory');
        Route::post('/edit', [EditCategoryController::class, 'editCategory'])->name('editCategory');
        Route::get('/add', [AddCategoryController::class, 'addFormCategory'])->name('addCategory');
        Route::post('/add', [AddCategoryController::class, 'addCategory'])->name('addCategory');
    });

    Route::group(['prefix' => 'user'], function (){
        Route::get('/list', [ListUserController::class, 'listUser'])->name('listUser');
        Route::get('/edit/{id}', [EditUserController::class, 'editFormUser'])->name('editFormUser');
        Route::post('/edit/{id}', [EditUserController::class, 'editUser'])->name('editUser');
        Route::get('/add', [AddUserController::class, 'addFormUser'])->name('addUserForm');
        Route::post('/add', [AddUserController::class, 'formAddUser'])->name('addUser');
        Route::get('/delete/{id}', [DeleteUserController::class, 'deleteUser'])->name('deleteUser');
        Route::get('statusUser/{id}', [ListUserController::class, 'statusUser'])
             ->name('statusUser');
    });

    Route::group(['prefix' => 'voucher'], function (){
        Route::get('/list', [ListVoucherController::class, 'listVoucher'])->name('listVoucher');
        Route::get('/delete/{slug}', [DeleteVoucherController::class, 'deleteVoucher'])
             ->name('deleteVoucher');
        Route::get('/edit/{slug}', [EditVoucherController::class, 'editFormVoucher'])
             ->name('editFormVoucher');
        Route::post('/edit/{slug}', [EditVoucherController::class, 'editVoucher'])
             ->name('editVoucher');
        Route::get('/add', [AddVoucherController::class, 'addFormVoucher'])->name('addFormVoucher');
        Route::post('/add', [AddVoucherController::class, 'addVoucher'])->name('addVoucher');
        Route::get('status/{id}', [ListVoucherController::class, 'status'])->name('status');
    });

});

Route::group(['prefix' => '/'], function (){
    Route::get('', [HomeController::class, 'index'])->name('index');
    Route::group(['prefix' => 'cart'], function (){
        Route::get('list', [CartController::class, 'list'])->name('listCart');
        Route::get('add', [CartController::class, 'add'])->name('addCart');
        Route::get('delete', [CartController::class, 'delete'])->name('deleteCart');
    });


    Route::get('product', [ProductController::class, 'product'])->name('product');
    Route::get('deals', [ProductDealsController::class, 'product_deals'])->name('product_deals');

    Route::get('details', [DetailsController::class, 'Details'])->name('details');
    Route::get('policy', [PolicyController::class, 'Policy'])->name('policy');
    Route::get('404', [ErrorController::class, 'enror'])->name('error');
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'loginForm'])->name('loginForm');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register', [RegisterController::class, 'registerFrom'])->name('registerFrom');
    Route::get('active/{token}', [RegisterController::class, 'active'])->name('active');
    Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('blog', [BlogController::class, 'blog'])->name('blog');
    Route::get('account', [AccountController::class, 'account'])->name('account');
    Route::get('about', [AboutController::class, 'about'])->name('about');
    Route::get('contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('wish-list', [ShopWishlistController::class, 'wishlist'])->name('wishlist');
    Route::get('blog-detail', [BlogDetailController::class, 'blogdetail'])->name('blogdetail');
    Route::get('forget-password', [ForgetPasswordController::class, 'fogetPassword'])
         ->name('fogetPassword');
    Route::post('forget-password', [ForgetPasswordController::class, 'postForgetPassword'])
         ->name('postForgetPassword');
    Route::get('reset-password/{token}', [ForgetPasswordController::class, 'resetPassword'])
         ->name('resetPassword');
    Route::post('reset-password/{token}', [ForgetPasswordController::class, 'postResetPassword'])
         ->name('postResetPassword');
});