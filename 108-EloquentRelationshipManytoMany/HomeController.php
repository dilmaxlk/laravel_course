<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        // $all = Author::with('book')->get();
        // foreach($all as $item){
        //     echo $item->name. '<br>';
        //     foreach($item->book as $item2){
        //         echo $item2->title. '<br>';
        //     }
        //     echo '<br>';
        // }

        //-------------------------------------------------------
        // $data = Author::with('book')->where('id', 1)->first();
        // echo $data->name. '<br>';
        // foreach($data->book as $item){
        //     echo $item->title. '<br>';

        // }
        //-------------------------------------------------------

        // $all = Book::with('author')->get();
        // foreach($all as $item){
        //         echo $item->title. '<br>';
        //         foreach($item->author as $item2){
        //             echo $item2->name. '<br>';
        //         }
        //         echo '<br>';
        //     }
        //-------------------------------------------------------
        
        $data = Book::with('author')->where('id', 1)->first();
        echo $data->title. '<br>';
        foreach($data->author as $item){
            echo $item->name. '<br>';

        }
    }
}
