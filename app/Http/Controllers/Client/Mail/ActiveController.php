<?php

namespace App\Http\Controllers\Client\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ActiveController extends Controller
{
    public function activateMaill($data){
        if ($data){
            Mail::send('client.pages.mail.mailactive', compact('data'), function ($email) use ($data){
                $email->subject('Cơm hộp Cần Thơ - Kích hoạt tài khoản');
                $email->to($data->email, $data->name);
            });
        }
    }
}
