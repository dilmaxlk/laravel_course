<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;


class ContactController extends Controller
{
    public function index()
    {
        //return view('contact');

        return view('test');
    }


    public function store(Request $request)
    {
        //dd($request->all());


        $request->validate([
            'pw' => ['required', 'min:8'],
    
            
        ],[],[
            'pw' => 'Password'
        ]);

         echo "Success";
         
         
        // $request->validate([
        //     'password' => ['required', 'min:8'],
    
            
        // ],[
        //     'password.required'=>'You must have to give the Password',
        //     'password.min'=>'Type at least eight characters ',
        // ]);

        //  echo "Success";
 
 //------------------------------------------------------------------------------------------------------------------------------        

        // $request->validate([
        //     'password' => ['required','confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
        //     'password_confirmation' => ['required']
        //     //'confirm_password' => ['required', 'same:password']
            

        // ]);

        //  echo "Success";

//------------------------------------------------------------------------------------------------------------------------------        
        //50 - Form Validation - File or Image Upload Validation
        // $request->validate([
        //     'file' => ['required','mimes:png,jpeg,pdf','max:100']

        // ]);

        // echo "Success";



        // $request->validate([
        //     'name' => 'required|min:5|max:30',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     //'date' => 'required|date',
        //     'date' => 'required|regex:/^\d{4}-\d{2}-\d{2}+$/',
        //     'age' => 'required|numeric',
        //     'message' => 'required'
        // ]);

        // echo "Success";
    }
}
