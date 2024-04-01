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
}
