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

//Method 01
// Route::get('home', function () {
//     return view('home', ['name' => 'Dilshan Maduranga', 'age' => '35']);
// });

//Method 02
// Route::get('home', function () {
//     return view('home')->with('name', 'Ama Dinushi')->with('age', '30');
// });

//Method 03
// Route::get('home', function () {
//     return view('home')->with(['name' => 'Ama Dinushi', 'age' => '35']);
// });

//Method 04
// Route::get('home', function () {

//     $name = 'Dilshan Maduranga';
//     $age = '30';
//     return view('home' , compact('name', 'age'));
// });
