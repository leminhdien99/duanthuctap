<?php

namespace App\Http\Controllers\Client\Pages\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller{

    public $product;

    public function __construct(){
        $this->product = new Product();
    }

    function product(){
        $condition = [
            ['delete', '=', 0],
            ['status', '=', 1],
        ];
        $order     = [];
        $product   = $this->product->getProductList($condition, $order)->take(10);
        $order     = ['selling', 'desc'];
        $selling   = $this->product->getProductList($condition, $order);
        $order     = ['view', 'desc'];
        $view      = $this->product->getProductList($condition, $order)->take(5);

        return view('client.pages.home',
            ['product' => $product, 'selling' => $selling, 'view' => $view]);
    }

    function saleProduct(){
        $condition = [
            ['delete', '=', 0],
            ['status', '=', 1],
            ['products.quantify', '>', 0],
        ];
        $order     = [];
        $product   = $this->product->getProductList($condition, $order)->take(10);

        return view('Client.Pages.Product.sale_product', ['product' => $product]);
    }

    function listProduct(){
        $condition   = [
            ['delete', '=', 0],
            ['status', '=', 1],
            ['products.quantify', '>', 0],
        ];
        $order       = [];
        $product     = $this->product->getProductList($condition, $order);
        $order       = ['created_at', 'desc'];
        $productTime = $this->product->getProductList($condition, $order)->take(5);

        return view('client.pages.product.product',
            ['product' => $product, 'productTime' => $productTime]);
    }
}
