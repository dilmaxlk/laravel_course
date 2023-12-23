<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        // 1. Generate a unique name for the uploaded file.
        $final_name = 'new_image.' . $request->my_files->extension();
        echo $final_name;
    
        // 2. Move the uploaded file to the 'public/uploads' directory with the generated name.
        $request->my_files->move(public_path('uploads'), $final_name);
    
        // 3. Redirect back to the previous page (usually the form page).
        return redirect()->back();
    }
}
