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

1st way of doing redorect.
about route will redirect to contact page
Route::get('about', function () {
    return redirect('contact');
});

Route::get('contact', function () {
    return "Contact Page";
});

2nd way of doing redorection.
Route::redirect('about', 'contact', 301);
3//01 will confirem, the permanent redirection form about to contact page.

//we can wright this command without 301, like this...
Route::permanentRedirect('about', 'contact');
