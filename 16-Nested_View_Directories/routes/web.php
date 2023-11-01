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

//If you want to add different views to different folders, and configur the routes, then you can use Nested View Directories
Route::get('/', function () {
    return view('home');
});
// 

Route::get('admin/home', function () {
    return view('admin.home');
    //The view will be given as the folder sturcture.  
});

//you can give any name for the route
Route::get('customer/welcome', function () {
    return view('customer.home');
    // return view('customer.subfolder.subfolder.home');
    //if you have multipal folders, then you have to give the path withe . marke.
});