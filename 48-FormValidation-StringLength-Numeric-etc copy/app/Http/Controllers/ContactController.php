<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required|min:5|max:30',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required|date',
            'age' => 'required|numeric',
            'message' => 'required'
        ]);

        echo "Success";
    }
}
