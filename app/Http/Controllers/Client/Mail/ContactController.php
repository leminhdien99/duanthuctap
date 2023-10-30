<?php

namespace App\Http\Controllers\Client\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactMail($data){

        if ($data){
            Mail::send('client.pages.mail.mailcontact', compact('data'), function ($email) use ($data){
                $email->subject('Cơm hộp Cần Thơ - Liên hệ');
                $email->to($data['email'], $data['fullname']);
            });
        }
    }
}
