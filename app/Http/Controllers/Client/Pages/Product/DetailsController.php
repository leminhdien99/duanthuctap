<?php

namespace App\Http\Controllers\Client\Pages\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailsController extends Controller{

    public $product;

    public function __construct(){
        $this->product = new Product();
    }

    function Details($slug){
        $condition = [
            'products.slug' => $slug,
        ];
        $product   = $this->product->getProductFirst($slug);

        return view('client.pages.product.details', ['product' => $product]);
    }
}
