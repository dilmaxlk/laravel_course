<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class HomeController extends Controller
{
    public function index() 
    {
        return view('home');
    }

    public function test() 
    {
        // create image manager with desired driver
        $manager = new ImageManager(new Driver());

        // read image from file system
        $image = $manager->read('uploads/image.jpeg');
        // Image Crop
        $image->crop(500,500);
        // insert watermark
        $image->place('uploads/water_mark.png');
        //Save the file
        $image->save(public_path('uploads/crop.jpeg'));
    }
}
