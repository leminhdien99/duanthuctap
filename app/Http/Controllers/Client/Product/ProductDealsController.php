<?php

namespace App\Http\Controllers\Client\Product;

use App\Http\Controllers\Controller;

class ProductDealsController extends Controller
{
    function product_deals(){
        return view('client.pages.product_deals');
    }
}
