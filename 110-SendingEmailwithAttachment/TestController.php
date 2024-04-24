<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class TestController extends Controller
{

    public function index()
    {
        $subject = 'Test Subject Attachment';
        $body = 'Test Message Attachment';

        Mail::to('demouser@mydomainname.com')->send(new TestMail($subject, $body));

        echo 'Mail Sent';
    }

}
