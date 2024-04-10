<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        // $obj = new Student;
        // $obj->name = 'Nimal';
        // $obj->email = 'nimal@gmail.com';
        // $obj->age = '30';
        // $obj->country = 'Sri Lanka';
        // $obj->save();

    }

    public function show(){
        //$all_data = Student::get();
        //$all_data = Student::all(); 

        // $all_data = Student::where('country','Sri Lanka')->orderBy('name', 'asc')->get(); 
        // foreach ($all_data as $item) {
        //     echo $item->name .'-';
        //     echo $item->email .'-';
        //     echo $item->age .'-';   
        //     echo $item->country .'<br>';
        // }

        // $single = Student::find(1);
        // echo $single->name .'<br>';
        // echo $single->email .'<br>';
        // echo $single->age .'<br>';
        // echo $single->country;
        
        
        // $single = Student::where('name', 'John')->first();
        // echo $single->name .'<br>';
        // echo $single->email .'<br>';
        // echo $single->age .'<br>';
        // echo $single->country;
    }

    public function update()
    {
        //$single = Student::find(3);
        // $single = Student::where('id','3')->first();
        // $single->age = '35';
        // $single->save();

    }    

    public function delete()
    {
        // $single = Student::find(6);
        // $single->delete();
    }

    public function index()
    {
        // Student::firstOrCreate([
        //     'name'=> 'John',
        //     'email'=> 'John1@gmail.com',
        //     'age' => '35',
        //     'country' => 'Australia'
        // ]);



        $std = Student::firstOrNew([ 'email' => 'John99@gmail.com' ]);
        $std ->name = 'John';
        $std ->age = '30';
        $std ->country = 'USA';
        $std ->save();
        
    }
}
