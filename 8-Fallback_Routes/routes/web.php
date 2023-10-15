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


Route::get('/', function () {
    return "Home Page";
});

Route::get('about', function () {
    return "About Page";
});

//This route use, if the user enter to unknown url, the the user move to a defult page.
Route::fallback(function () {
    return view ('404');
});