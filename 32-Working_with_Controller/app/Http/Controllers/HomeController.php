<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name = 'Dilshan';
        return view('home', compact('name'));
    }

    public function about($username){
        return view('about', compact('username'));
    }

}
