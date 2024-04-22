<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class TestController extends Controller
{

    public function index()
    {
        $subject = 'Test Subject';
        $body = 'Test Message';

        Mail::to('smtwebmaster@gmail.com')->send(new TestMail($subject, $body));

        echo 'Mail Sent';
    }

}
