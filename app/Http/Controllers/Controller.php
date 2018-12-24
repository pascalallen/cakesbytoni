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
        $images = Image::where('main', 1)->get();
        return view('welcome', ['images' => $images]);
    }

    public function gallery(){
        $images = Image::all();
        return view('gallery', compact('images'));
    }

    public function imageView($id){
        $image = Image::find($id);
        return view('image-view', compact('image'));
    }
}
