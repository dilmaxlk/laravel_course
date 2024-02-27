<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index()
    {
       //echo DB::table('persons')->count();
       //echo DB::table('persons')->sum('salary');
       //echo DB::table('persons')->avg('salary');
       //echo DB::table('persons')->max('age');

       echo DB::table('persons')->min('age');
    }
}
