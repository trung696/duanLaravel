<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MailController extends Controller
{
    public function sendEmail()
    {
        $detail = [
            'title' => 'Test send mail',
            'body' => 'Test mail'
        ];
//        \Mail::to('hieunuce11@gmail.com')->send(new TestMail)
    }
}
