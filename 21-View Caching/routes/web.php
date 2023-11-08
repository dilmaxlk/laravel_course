<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

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

Route::get('products', function () {

    // Check if the view is already cached
    if (Cache::has('products_view')) {
        return Cache::get('products_view');
    }

    $data = ''; // Your data to be passed to the view

    // Render the view and cache it for 60 minutes
    $view = view('products', compact('data'))->render();
    Cache::put('products_view', $view, 60);

    return $view;
});