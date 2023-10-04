<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
   function list(){
       return view('client.pages.cart');
   }
}
