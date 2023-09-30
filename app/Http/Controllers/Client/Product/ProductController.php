<?php

namespace App\Http\Controllers\Client\Product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function product(){
        return view('client.pages.product',['page' => 'product']);
    }
}
