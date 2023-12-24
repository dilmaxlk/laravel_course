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
        //// Get the uploaded file from the request (assuming 'my_files' is the file input name).
        $file = $request->file('my_files');
        
        // Get the original file name without the extension.
        $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        //Generate the final file name with the original file name, unique ID.
        $final_name = uniqid(). '_' .$originalFileName.'.'. $request->my_files->extension();


        $request->my_files->storeAs('uploads', $final_name);
        
        
        return redirect()->back();
    }
}