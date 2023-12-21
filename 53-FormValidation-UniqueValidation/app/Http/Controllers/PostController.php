<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post');
    }


    public function store(Request $request)
    {
        //dd($request->all());


        $request->validate([
            'title' => ['required','unique:posts'],
            'decription' => ['required']
    
            
        ],[],[
            'pw' => 'Password'
        ]);

         echo "Success";
         
        
    }
}
