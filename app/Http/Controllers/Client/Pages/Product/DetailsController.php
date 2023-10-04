<?php

namespace App\Http\Controllers\Client\Pages\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    function Details(){
        return view('Client.Pages.Product.details');
    }
}
