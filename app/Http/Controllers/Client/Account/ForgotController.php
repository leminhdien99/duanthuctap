<?php

namespace App\Http\Controllers\Client\Account;

use App\Http\Controllers\Controller;

class ForgotController extends Controller
{
    function forgot(){
        return view('client.pages.forgot');
    }
}
