<?php

//74)  Soft Delete and Data Restore

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('student', [StudentController::class, 'index']);
Route::get('delete', [StudentController::class, 'delete']);
Route::get('res', [StudentController::class, 'restore']);
Route::get('force_delete', [StudentController::class, 'forceDelete']);
