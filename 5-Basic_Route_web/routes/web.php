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

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});  


Route::get('about/dilshan', function () {
    return view('about');
});

Route::get('about', function () {
    return "<h1>---This is About Us Page--- </h1>";
});

