<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        //$students = Student::get();
        $students = Student::paginate(10);
        return view('student', compact('students'));
    }
}
