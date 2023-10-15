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
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

//When we use route::get method, we use function, but we will not using functions on
//route::view method.

Route::view('about', 'about');

Route::view('about', 'about', ['name' => 'Dilshan']);

//in here first 'about' is route, and secound 'about' is view file.
//on thried parameter we can use a array, then we can pass any parameter..
Route::permanentRedirect('about', 'contact');
