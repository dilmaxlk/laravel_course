<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $obj = new Customer;
        $obj->name = "Ama";
        $obj->email = "ama@maxmind.lk";
        $obj->phone = "0775";
        $obj->country = "Sri Lanka";
        $obj->save();
    }

    //To show the data.
    public function show()
    {

        $customer_data = Customer::get();
        return view('show', compact('customer_data'));
    }
}
