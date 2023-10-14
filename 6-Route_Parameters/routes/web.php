<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

//Copy and past this file to route folder and rename to web.php


//--------Route Parameters-----------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

Route::get('about/{username}/{age}', function ($username, $age) {
    //return view('about', ['username' => $username, 'age' => $age]);

    return view('about', compact('username', 'age'));
});

