<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        $obj = new Student;
        $obj->name = 'Nimal';
        $obj->email = 'nimal@gmail.com';
        $obj->age = '30';
        $obj->country = 'Sri Lanka';
        $obj->save();

    }

    public function show(){
        //$all_data = Student::get();
        //$all_data = Student::all(); 

        // $all_data = Student::where('country','Sri Lanka')->orderBy('name', 'asc')->get(); 
        // foreach ($all_data as $item) {
        //     echo $item->name .'-';
        //     echo $item->email .'-';
        //     echo $item->age .'-';   
        //     echo $item->country .'<br>';
        // }

        // $single = Student::find(1);
        // echo $single->name .'<br>';
        // echo $single->email .'<br>';
        // echo $single->age .'<br>';
        // echo $single->country;
        
        
        $single = Student::where('name', 'John')->first();
        echo $single->name .'<br>';
        echo $single->email .'<br>';
        echo $single->age .'<br>';
        echo $single->country;
    }

    

}
