<?php

namespace App\Http\Controllers\client\pages\product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClassProductController extends Controller{

    public $product;
    public $category;

    public function __construct(){
        $this->product  = new Product();
        $this->category = new Category();
    }

    function class($slug){
        $where       = ['slug' => $slug,];
        $idCategory  = $this->category->getId($where);
        $condition   = [
            ['products.delete', '=', 0],
            ['products.status', '=', 1],
            ['categories.id', $idCategory],
            ['products.quantify', '>', 0],
        ];
        $data        = $this->product->getProductCA($condition);
        $condition   = [
            ['delete', '=', 0],
            ['status', '=', 1],
            ['products.quantify', '>', 0],
        ];
        $order       = ['created_at', 'desc'];
        $productTime = $this->product->getProductList($condition, $order)->take(5);

        //        dd($data);
        return view('client.pages.product.product',
            ['product' => $data, 'productTime' => $productTime]);
    }

}
