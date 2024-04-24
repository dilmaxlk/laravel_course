<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        //echo MyCountry();

        echo calulate(40);
    }


}
