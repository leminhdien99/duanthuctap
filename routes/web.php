<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\ViewDashboardController;
use App\Http\Controllers\Admin\Category\AddCategoryController;
use App\Http\Controllers\Admin\Category\DeleteCategoryController;
use App\Http\Controllers\Admin\Category\EditCategoryController;
use App\Http\Controllers\Admin\Category\ListCategoryController;

use App\Http\Controllers\Client\About\AboutController;
use App\Http\Controllers\Client\ShopWishlist\ShopWishlistController;
use App\Http\Controllers\Client\BlogDetail\BlogDetailController;
use App\Http\Controllers\Client\Pages\PolicyController;
use App\Http\Controllers\Client\Pages\Product\DetailsController;
use App\Http\Controllers\Client\Pages\Product\ProductController;
use App\Http\Controllers\Client\Pages\Product\ClassProductController;
use App\Http\Controllers\Client\Blog\BlogController;
use App\Http\Controllers\Client\Account\AccountController;
use App\Http\Controllers\Admin\Contact\AddContactController;
use App\Http\Controllers\Admin\Contact\DeleteContactController;
use App\Http\Controllers\Admin\Contact\ListContactController;

use App\Http\Controllers\Client\ErrorController;
use App\Http\Controllers\Client\Account\ForgetPasswordController;
use App\Http\Controllers\Client\Account\LoginController;
use App\Http\Controllers\Client\Account\RegisterController;
use App\Http\Controllers\Client\Cart\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\Account\GoogleController;

use App\Http\Controllers\Admin\Products\ListProductController;
use App\Http\Controllers\Admin\Products\AddProductController;
use App\Http\Controllers\Admin\Products\DeleteProductController;
use App\Http\Controllers\Admin\Products\EditProductController;
use App\Http\Controllers\Admin\User\AddUserController;
use App\Http\Controllers\Admin\User\DeleteUserController;
use App\Http\Controllers\Admin\User\EditUserController;
use App\Http\Controllers\Admin\User\ListUserController;
use App\Http\Controllers\Admin\Voucher\AddVoucherController;
use App\Http\Controllers\Admin\Voucher\DeleteVoucherController;
use App\Http\Controllers\Admin\Voucher\EditVoucherController;
use App\Http\Controllers\Admin\Voucher\ListVoucherController;


// User and Voucher


Route::group(['prefix' => 'admin'], function (){
    Route::get('/', [ViewDashboardController::class, 'dashboar'])->name('dashboar');
    Route::group(['prefix' => 'category'], function (){
        Route::get('/list', [ListCategoryController::class, 'listCategory'])->name('listCategory');
        Route::get('/delete', [DeleteCategoryController::class, 'deleteCategory'])
             ->name('deleteCategory');
        Route::get('/edit', [EditCategoryController::class, 'editFormCategory'])
             ->name('editCategory');
        Route::post('/edit', [EditCategoryController::class, 'editCategory'])->name('editCategory');
        Route::get('/delete/{slug}', [DeleteCategoryController::class, 'deleteCategory'])
             ->name('deleteCategory');
        Route::get('/edit/{slug}', [EditCategoryController::class, 'editFormCategory'])
             ->name('editCategory');
        Route::post('/edit/{slug}', [EditCategoryController::class, 'editCategory'])
             ->name('editCategory');
        Route::get('/add', [AddCategoryController::class, 'addFormCategory'])->name('addCategory');
        Route::post('/add', [AddCategoryController::class, 'addCategory'])->name('addCategory');

    });

    Route::group(['prefix' => 'product'], function (){
        Route::get('/list', [ListProductController::class, 'listProduct'])->name('listProduct');
        Route::get('/listHistory', [ListProductController::class, 'listHistory'])
             ->name('listHistory');
        Route::post('/add', [AddProductController::class, 'addProduct'])->name('addProduct');
        Route::get('/add', [AddProductController::class, 'addFormProduct'])->name('addProduct');
        Route::get('/edit/{slug}', [EditProductController::class, 'editFormProduct'])
             ->name('editProduct');
        Route::post('/edit/{slug}', [EditProductController::class, 'updateProduct'])
             ->name('editProduct');
        Route::get('/deleteHistory/{slug}', [DeleteProductController::class, 'deleteHistory'])
             ->name('deleteHistory');
        Route::get('/restore/{slug}', [DeleteProductController::class, 'restoreProduct'])
             ->name('restoreProduct');
        Route::get('/image/{id}', [EditProductController::class, 'deleteImage'])
             ->name('deleteImage');
        Route::get('/inter/{id}', [EditProductController::class, 'deleteInter'])
             ->name('deleteInter');
        Route::get('/{id}', [ListProductController::class, 'StatusProduct'])->name('StatusProduct');
    });

    Route::group(['prefix' => 'user'], function (){
        Route::get('/list', [ListUserController::class, 'listUser'])->name('listUser');
        Route::get('/danh-sach-xoa-tai-khoan', [ListUserController::class, 'ListUserHistory'])
             ->name('ListUserHistory');
        Route::get('cap-nhat-trang-thai/{id}', [ListUserController::class, 'statusUser'])
             ->name('statusUser');
        Route::get('/chinh-sua/{id}', [EditUserController::class, 'editFormUser'])
             ->name('editFormUser');
        Route::post('/chinh-sua/{id}', [EditUserController::class, 'editUser'])->name('editUser');
        Route::get('/them', [AddUserController::class, 'addFormUser'])->name('addUserForm');
        Route::post('/them', [AddUserController::class, 'formAddUser'])->name('addUser');
        Route::get('/xoa/{slug}', [DeleteUserController::class, 'deleteUser'])->name('deleteUser');
        Route::get('/khoi-phuc-tai-khoan/{id}', [DeleteUserController::class, 'userRestore'])
             ->name('userRestore');
    });

    Route::group(['prefix' => 'voucher'], function (){
        Route::get('/danh-sach', [ListVoucherController::class, 'listVoucher'])
             ->name('listVoucher');
        Route::get('/danh-sach-xoa-voucher', [ListVoucherController::class, 'ListVoucherHistory'])
             ->name('ListVoucherHistory');
        Route::get('/xoa/{slug}', [DeleteVoucherController::class, 'deleteVoucher'])
             ->name('deleteVoucher');
        Route::get('/chinh-sua/{slug}', [EditVoucherController::class, 'editFormVoucher'])
             ->name('editFormVoucher');
        Route::post('/chinh-sua/{slug}', [EditVoucherController::class, 'editVoucher'])
             ->name('editVoucher');
        Route::get('/them', [AddVoucherController::class, 'addFormVoucher'])
             ->name('addFormVoucher');
        Route::post('/them', [AddVoucherController::class, 'addVoucher'])->name('addVoucher');
        Route::get('trang-thai-voucher/{id}', [ListVoucherController::class, 'status'])
             ->name('status');
        Route::get('/khoi-phuc-voucher/{slug}', [DeleteVoucherController::class, 'VoucherRestor'])
             ->name('VoucherRestor');
        Route::get('/{id}', [ListCategoryController::class, 'StatusCategory'])
             ->name('StatusCategory');

    });
    Route::group(['prefix' => 'lien-he'], function (){
        Route::get('/danh-sach-lien-he', [ListContactController::class, 'listContact'])
             ->name('listContact');
        Route::get('/xoa-lien-he/{id}', [DeleteContactController::class, 'deleteContact'])
             ->name('deleteContact');
        Route::get('/khoi-phuc/{id}', [DeleteContactController::class, 'restoreContact'])
             ->name('restoreContact');
        Route::get('/trang-thai-lien-he/{id}', [ListContactController::class, 'statusContact'])
             ->name('statusContact');
        Route::get('/danh-sach-xoa-lien-he', [ListContactController::class, 'listDeleteContact'])
             ->name('listDeleteContact');
    });

});

Route::group(['prefix' => '/'], function (){
    Route::get('', [ProductController::class, 'product'])->name('index');
    Route::group(['prefix' => 'cart'], function (){
        Route::get('list', [CartController::class, 'list'])->name('listCart');
        Route::get('add', [CartController::class, 'add'])->name('addCart');
        Route::get('delete', [CartController::class, 'delete'])->name('deleteCart');
    });


    Route::get('product', [ProductController::class, 'listProduct'])->name('product');
    Route::get('product/{slug}', [ClassProductController::class, 'class'])->name('class');
    Route::get('deals', [ProductController::class, 'saleProduct'])->name('sale_product');

    Route::get('details/{slug}', [DetailsController::class, 'Details'])->name('details');
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
    Route::get('contact', [AddContactController::class, 'contact'])->name('contact');
    Route::post('lien-he', [AddContactController::class, 'contactFrom'])->name('contactFrom');
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

    Route::get('tai-khoan', [AccountController::class, 'account'])->name('account');
    Route::post('sua-tai-khoan/{token}', [AccountController::class, 'updateProfile'])
         ->name('updateProfile');
    Route::post('doi-mat-khau/{token}', [AccountController::class, 'updatePassword'])
         ->name('updatePassword');

    Route::get('/google', [GoogleController::class, 'loginUsingGoogle'])->name('loginGoogle');
    Route::get('/google/callback', [GoogleController::class, 'callbackFromGoogle'])
         ->name('callBackGoogle');
});