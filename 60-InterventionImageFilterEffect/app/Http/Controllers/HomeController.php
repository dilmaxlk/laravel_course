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

//---------------------------------------------------------
        // Image Resize
            $image->resize(500,200);
//---------------------------------------------------------

//---------------------------------------------------------
        // Image Resize
            //$image->rotate(45);
//---------------------------------------------------------

//---------------------------------------------------------
        // Image Flip
        //$image->flip('v'); //'h'
        //---------------------------------------------------------
        
        //---------------------------------------------------------
                // Image Blur
                    //$image->resize(500,200)->blur(15);
        //---------------------------------------------------------
                
//---------------------------------------------------------
        // Image greyscale
            //$image->resize(500,200)->greyscale();
//---------------------------------------------------------
        
         //Save the file
        $image->save(public_path('uploads/resize.jpeg'));
    }
}
