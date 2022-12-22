<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Photo;
use App\Models\Comment;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function add_photo()
    {
        $photo = Photo::create([
            'name' => 'Bird',
            'description' => 'anfjk'
        ]);
        //dd($photo->toArray());

        //one to many
        // $comment = new Comment();
        // $comment = $photo->comments()->save($comment);

        $tag = new Tag(['name' => '#gasx']);
        $tag1 = $photo->tags()->save($tag);
    }
}
