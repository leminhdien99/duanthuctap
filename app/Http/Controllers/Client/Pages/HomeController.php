<?php

namespace App\Http\Controllers\Client\Pages;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index(){
        return view('Client.Pages.home');


    }
}
