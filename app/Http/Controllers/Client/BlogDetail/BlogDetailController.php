<?php

namespace App\Http\Controllers\Client\BlogDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    function blogdetail(){
        return view('client.pages.blog-detail');
    }

}
