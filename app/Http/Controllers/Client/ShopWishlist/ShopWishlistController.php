<?php

namespace App\Http\Controllers\Client\ShopWishlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopWishlistController extends Controller
{
    function wishlist(){
        return view('client.pages.shop-wishlist');
    }
}
