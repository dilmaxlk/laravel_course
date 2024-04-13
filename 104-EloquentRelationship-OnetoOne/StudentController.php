<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentProfile;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        $single = Student::with('profile')->find(2);
        echo $single->name.'<br>';  
        echo $single->email.'<br>';  
        echo $single->profile->country.'<br>'; 
    }
}
