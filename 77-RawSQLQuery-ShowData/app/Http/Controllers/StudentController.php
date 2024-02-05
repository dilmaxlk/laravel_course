<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $all = DB::select('select * from students');
        // foreach($all as $single){
        //     echo $single->name.'<br>';
        //     echo $single->email.'<br><br><br>';
        // }

        //Show any single data
        $single = DB::select('select * from students where id=?', [1]);
        echo $single[0]->name.'<br>';
        echo $single[0]->email;
    }


    public function create()
    {
        DB::insert('INSERT INTO students (name, email) VALUES (?, ?)', ['Nimal', 'nimal@example.com']);

    }
}
