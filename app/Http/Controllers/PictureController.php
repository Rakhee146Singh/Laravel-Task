<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function add_picture()
    {
        $picture = Picture::create([
            'title' => 'Flower',
        ]);
        //dd($picture->toArray());
        $image = new Image();
        $image = $picture->images()->save($image);
    }

    public function show_picture()
    {
        $picture = Picture::with('images')->get()->toArray();
        dd($picture);
    }
}
