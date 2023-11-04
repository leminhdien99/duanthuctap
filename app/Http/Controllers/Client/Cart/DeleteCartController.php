<?php

namespace App\Http\Controllers\client\cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class DeleteCartController extends Controller
{
    public $cart;

    function __construct(){
        $this->cart    = new Cart();
    }
    public function delete($id){
        $condition = [
            ['id', '=', $id]
        ];
        $data = $this->cart->deleteCart($condition);
        return redirect()->back();
    }
    public function deleteAll()
    {
        $this->cart->truncate();
        return redirect()->back();
    }
}
