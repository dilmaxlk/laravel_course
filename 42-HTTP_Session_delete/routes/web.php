<?php

use Illuminate\Http\Request;
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

Route::get('show_session_data', function (Request $request) {
    //Both commands are doing samething
    //dd(session()->all());
    dd($request->session()->all());

    // echo $request->session()->get('username');
    // echo '<br>';
    // echo $request->session()->get('email');

    //This is another way.
    // echo session('username');
    // echo '<br>';
    // echo session('email');

    // if($request->session()->has('mobile')){
    //     echo session('mobile');
    // } else{
    //     echo 'Mobile session is not avalable';
    // }

    
});


Route::get('store_session_data', function (Request $request) {

    // $request->session()->put('username', 'Dilshan');
    // $request->session()->put('email', 'dilshan@maxmind.lk');
    
    //This is another way.
    session([
        'username' => 'Dilshan',
        'email' => 'dilshan@maxmind.lk',
        'mobile' => '077123456789'
    ]);

    // session()->flash('status', 'Success it is DONE');
});

Route::get('delete_session_data', function (Request $request) {
    
    $request->session()->forget('username');
    //$request->session()->forget(['username', 'email', 'mobile']);
    //$request->session()->flush();

});