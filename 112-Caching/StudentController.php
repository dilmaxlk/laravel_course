<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Cache;

class StudentController extends Controller
{
    public function index()
    {

        //Cache::forget('school_students');
        $all_data = Student::get();

        // $all_data = Cache::remember('school_students', '10', function(){
        //     return Student::get();
        // });

        // $all_data = Cache::rememberForever('school_students', function(){
        //     return Student::get();
        // });

        foreach($all_data as $item){
            echo $item->id.'-'. $item->name.'<br>';

        }


        // $all_data = Student::get();
        // foreach($all_data as $item){
        //     echo $item->id.'-'. $item->name.'<br>';

        // }

    }
}
