<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'file' => ['required','mimes:png,jpeg,pdf','max:100']

        ]);

        echo "Success";


    }
}
