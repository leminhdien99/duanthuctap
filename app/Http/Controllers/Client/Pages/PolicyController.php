<?php

namespace App\Http\Controllers\Client\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    function Policy(){
        return view('Client.Pages.policy');
    }
}
