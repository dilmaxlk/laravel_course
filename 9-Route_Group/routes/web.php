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


Route::middleware('auth')->group(function(){
// Route::middleware(['auth', 'admin'])->group(function(){

    Route::get('dashboard', function () {
        return "Dashboard";
    });

    Route::get('profile', function () {
        return "Profile";
    });

    Route::get('photo', function () {
        return "Photos";
    });
});


// Route::prefix('admin')->group(function(){

//     Route::get('about', function () {
//         return "About";
//     });

//     Route::get('contact', function () {
//         return "Contact";
//     });

//     Route::get('settings', function () {
//         return "Settings";
//     });
// });