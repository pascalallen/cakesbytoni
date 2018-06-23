<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        $cakeImage = Image::where([['category_id', 1],['main', 1]])->first();
        $cupcakesImage = Image::where([['category_id', 2],['main', 1]])->first();
        return view('welcome', ['cakeImage' => $cakeImage, 'cupcakesImage' => $cupcakesImage]);
    }

    public function gallery(){
        $images = Image::all();
        return view('gallery', ['images' => $images]);
    }

    public function imageView($id){
        $image = Image::find($id);
        return view('image-view', ['image' => $image]);
    }
}
