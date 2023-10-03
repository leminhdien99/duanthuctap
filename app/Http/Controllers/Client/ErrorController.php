<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    function enror(){
        return view('Client.Pages.error');

    }
}
