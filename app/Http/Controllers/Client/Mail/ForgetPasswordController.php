<?php

namespace App\Http\Controllers\Client\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordController extends Controller
{
    public function forgetPassword($data){
        if ($data){
            Mail::send('client.pages.mail.mailforgetpassword', compact('data'),
                function ($email) use ($data){
                    $email->subject('Cơm hộp Cần Thơ - Đặt lại mật khẩu');
                    $email->to($data->email, $data->name);
                });
        }
    }
}
