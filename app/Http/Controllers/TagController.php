<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function show_photo()
    {
        //$photo = Photo::find(2);
        $photo = Tag::with('photos')->get()->toArray();
        dd($photo);
    }

    public function show_video()
    {
        //$video = Video::find(1);
        $video = Tag::with('videos')->get()->toArray();
        dd($video);
    }

    public function add_tag()
    {
        $photo = Photo::find(2);
        $tag = Tag::create([
            'name' => '#iojsk',
        ]);
        dd($tag->toArray());

        $tag1 = $photo->tags()->save($tag);
    }

    public function show_tag()
    {
        $tag = Tag::find(1);
        //$photo = Photo::with('tags')->get()->toArray();
        return $tag;
    }
}
