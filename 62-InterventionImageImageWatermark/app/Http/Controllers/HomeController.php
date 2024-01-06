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

        //Water Mark image
        $water_mark = $manager->read('uploads/water_mark.png');

        //Place the water mark
        $image->place($water_mark, 'bottom-right', 10, 10);
        
         //Save the file
        $image->save(public_path('uploads/image_water_mark.jpeg'));
    }
}


        // write text to image
        // $image->text('My Text Water Mark', 600, 100, function ($font) {
        //     $font->filename('uploads/ComicSansMS3.ttf');
        //     $font->color('#fff');
        //     $font->size(30);
        //     $font->align('center');
        //     $font->valign('bottom');
        //     $font->lineHeight(1.6);
        //     $font->angle(10);
        // });

//---------------------------------------------------------
        // Image Resize
            //$image->resize(500,200);
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