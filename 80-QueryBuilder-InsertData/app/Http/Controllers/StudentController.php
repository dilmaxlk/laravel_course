<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // $data = [
        //You can pass the data from outside, using a variable.
    // ];

    public function create()
    {
        DB::table('students')->insert([
            [
            'name' => 'Kalum Perera ',
            'email' => 'kkl@gmail.com',
            'age' => 35
            ],

            [
                'name' => 'Sunil Perera ',
                'email' => 'sunil@gmail.com',
                'age' => 40
            ]
    ]);
    }
}
