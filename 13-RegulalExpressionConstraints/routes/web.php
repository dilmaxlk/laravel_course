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


Route::get('about/{id}', function ($id) {
    return "About Page";
})->where('id', '[0-9]+');



//[0-9]+ only allow, numbers
//http://127.0.0.1:8000/about/11 will go the about page.
//http://127.0.0.1:8000/about/aaaa will go to 404 page


Route::get('student/{username}', function ($username) {
    return "About Page";
})->where('username', '[a-zA-Z]+');


//[a-zA-Z]+ only allow, a-z and A-Z names
//http://127.0.0.1:8000/student/aaa123 (this route not allowed)