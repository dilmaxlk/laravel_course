<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index()
    {
        $result = DB::table('persons')
        ->select('country', DB::raw('COUNT(*) as total_count'))
        ->groupBy('country')
        ->get();


        foreach($result as $item){
            $country = $item->country;
            $count = $item->total_count;
            echo 'Country:'.$country.'<br>';
            echo 'Total Persons:'.$count.'<br><br><br>';
        }

       //echo DB::table('persons')->count();
       //echo DB::table('persons')->sum('salary');
       //echo DB::table('persons')->avg('salary');
       //echo DB::table('persons')->max('age');
       //echo DB::table('persons')->min('age');  
    }
}
