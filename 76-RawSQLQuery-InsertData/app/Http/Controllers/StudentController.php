<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        DB::insert('INSERT INTO students (name, email) VALUES (?, ?)', ['Nimal', 'nimal@example.com']);

    }
}
