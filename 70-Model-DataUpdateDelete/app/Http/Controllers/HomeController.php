<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //Delete the data
        $single_customer_data =  Customer::find(3);
        $single_customer_data->delete();



        //Get the single data and update
    //    $single_customer_data =  Customer::find(1);
    //    $single_customer_data->name = 'Kamal';
    //    $single_customer_data->email = 'kamal@gmail.com';
    //    $single_customer_data->update();




       //echo $single_customer_data->name;

        // $obj = new Customer;
        // $obj->name = "Ama";
        // $obj->email = "ama@maxmind.lk";
        // $obj->phone = "0775";
        // $obj->country = "Sri Lanka";
        // $obj->save();
    }

    //To show the data.
    public function show()
    {

        $customer_data = Customer::get();
        return view('show', compact('customer_data'));
    }
}
