<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StudentController extends Controller
{

public function index()
{

       $single_data = DB::table('students')->find(2);
        echo $single_data->name. '<br>';
        echo $single_data->email. '<br>';
        echo $single_data->age. '<br><br><br>';

    
    //    $single_data = DB::table('students')->where('id', 1)->first();
    //     echo $single_data->name. '<br>';
    //     echo $single_data->email. '<br>';
    //     echo $single_data->age. '<br><br><br>';
   

    // $all_data = DB::table('students')-> where ('age', 25)-> orWhere ('age', 35)->get();
    // foreach ($all_data as $item){
    //     echo $item->name. '<br>';
    //     echo $item->email. '<br>';
    //     echo $item->age. '<br><br><br>';
    // }

    // $all_data = DB::table('students')-> where ('age', '>', 25)-> where ('age', '<', 35)->get();
    // foreach ($all_data as $item){
    //     echo $item->name. '<br>';
    //     echo $item->email. '<br>';
    //     echo $item->age. '<br><br><br>';
    // }

    // $all_data = DB::table('students')-> where ('age', 25)->get();
    // foreach ($all_data as $item){
    //     echo $item->name. '<br>';
    //     echo $item->email. '<br>';
    //     echo $item->age. '<br><br><br>';
    // }


    // $all_data = DB::table('students')->get();
    // foreach ($all_data as $item){
    //     echo $item->name. '<br>';
    //     echo $item->email. '<br>';
    //     echo $item->age. '<br><br><br>';
    // }


    // $all_data = DB::table('students')->get();
    // echo '<pre>';
    // print_r($all_data);
    
}

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

    public function update()
    {
        $data = [
            'name'=> 'Dilshan Maduranga',
            'age' => 32
        ];
        DB::table('students')->where('id', 1)->update($data);
    }


    public function delete()
    {
        DB::table('students')->where('id', 11)->delete();
    }

    public function join()
    {
        $result = DB::table('students')
        ->join('fees', 'students.id', '=', 'fees.student_id')
        ->select('fees.*', 'students.name', 'students.age')
        ->get();

        //dd($result);

        foreach ($result as $item){
            echo $item->name.'<br>';
            echo $item->age.'<br>';
            echo $item->fee_amount.'<br><br>';
        }

    }

}
