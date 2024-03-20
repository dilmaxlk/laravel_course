<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index()
    {

        $result = DB::table('persons')->pluck('name');
        echo '<pre>';
        print_r($result);



        // $result = DB::table('persons')
        //           ->whereIn('id', [2,3,4])
        //           ->get();

        // foreach($result as $item){
        //     echo $item->id. '-';
        //     echo $item->name. '<br>';


        // }



        // $all_data = DB::table('persons')->orderBy('name', 'asc')->get(); //desc
        // foreach($all_data as $item){
        //     echo $item->name. '-';
        //     echo $item->age. '-';
        //     echo $item->salary. '-';
        //     echo $item->country. '<br>';
        // }



        // $result = DB::table('persons')
        // ->select('country', DB::raw('COUNT(*) as total_count'))
        // ->groupBy('country')
        // //->having('total_count', '<=', 1)
        // ->havingRaw('COUNT(*) > 1')
        // ->get();


        // foreach($result as $item){
        //     $country = $item->country;
        //     $count = $item->total_count;
        //     echo 'Country:'.$country.'<br>';
        //     echo 'Total Persons:'.$count.'<br><br><br>';
        // }


        // $result = DB::table('persons')
        // ->select('country', 
        //     DB::raw('COUNT(*) as total_count'),
        //     DB::raw('AVG(age) as avg_age'),
        //     DB::raw('MAX(salary) as max_salary')
        //     )
        // ->groupBy('country')
        // ->get();


        // foreach($result as $item){
        //     $country = $item->country;
        //     $count = $item->total_count;
        //     $avg_age = $item->avg_age;
        //     $max_salary = $item->max_salary;
            
        //     echo 'Country:'.$country.'<br>';
        //     echo 'Total Persons:'.$count.'<br>';
        //     echo 'Avg Age:'.$avg_age.'<br>';
        //     echo 'MAX Salary:'.$max_salary.'<br><br><br>';
        // }


        // $result = DB::table('persons')
        // ->select('country', DB::raw('COUNT(*) as total_count'))
        // ->groupBy('country')
        // ->get();


        // foreach($result as $item){
        //     $country = $item->country;
        //     $count = $item->total_count;
        //     echo 'Country:'.$country.'<br>';
        //     echo 'Total Persons:'.$count.'<br><br><br>';
        // }


       //echo DB::table('persons')->count();
       //echo DB::table('persons')->sum('salary');
       //echo DB::table('persons')->avg('salary');
       //echo DB::table('persons')->max('age');
       //echo DB::table('persons')->min('age');  
    }
}
