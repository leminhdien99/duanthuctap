<?php

namespace App\Http\Controllers\client\cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class ViewCartController extends Controller
{
    public $cart;

    function __construct(){
        $this->cart = new Cart();
    }
    function list($id){
        $condition = [
            ['id_user', '=', $id]
        ];
        $cart = $this->cart->getAllCart($condition);
        $total = $this->cart->sumTotal($condition, 'total',);
        $quantity = $this->cart->sumTotal($condition, 'quantity');
        return view('client.pages.cart', ['cart' => $cart, 'total' => $total, 'quantity' => $quantity]);
    }
}
