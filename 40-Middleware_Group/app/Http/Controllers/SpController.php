<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpController extends Controller
{
    public function __construct()

    public function index()
    {
        echo 'Home Page';
        
    }

    public function about()
    {
        echo 'About Page';
    }

    public function contact()
    {
        echo 'Contact Page';
    }

    public function service()
    {
        echo 'Service Page';
    }
}
