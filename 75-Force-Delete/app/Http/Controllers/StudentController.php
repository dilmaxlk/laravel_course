<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {


    //    $student_data = Student::onlyTrashed()->latest()->get();
    //     foreach($student_data as $item){
    //         echo $item->name . '-' . $item->email. '<br>';

    //     }

        $student_data = Student::get();
        foreach($student_data as $item){
            echo $item->name . '-' . $item->email. '<br>';

        }
        $obj = new Student;
        $obj->name = 'Nimal Kumara';
        $obj->email = 'nk@maxmind.lk';
        $obj->save();
    }

    public function delete()
    {
        Student::where('id', 3)->delete();
    }

    public function restore()
    {
        Student::where('id', 3)->restore();
    }

    public function forceDelete()
    {
        Student::where('id', 4)->forceDelete();
    }
}
