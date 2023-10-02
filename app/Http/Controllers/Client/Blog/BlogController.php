<?php

namespace App\Http\Controllers\Client\Blog;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function blog(){
        return view('client.pages.blog',['page' => 'blog']);
    }
}
