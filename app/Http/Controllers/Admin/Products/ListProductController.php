<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ListProductController extends Controller
{

    public $products;
    public function __construct()
    {
        $this->product = new Product();
    }
    function listProduct(){
        $condition = [
            ['delete', '=', 0]
        ];

        $data = $this->product->listProduct($condition);
        return view('admin.product.list',['page'=>'product', 'query'=>$data]);

    }
    public function StatusProduct($productId)
    {
        $product = Product::find($productId);

        if ($product) {
            if ($product->status) {
                $product->status = 0;
            } else {
                $product->status = 1;
            }
            $product->save();
        }
        return back();
    }
    function listHistory(){
        $condition = [
            ['delete', '=', 1],
        ];
        $data = $this->product->listProduct($condition);
        return view('admin.product.deleteHistory',['page' => 'product', 'query'=>$data]);
    }
}
