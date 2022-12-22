<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Tag;

class VideoController extends Controller
{
    public function add_video()
    {
        $video = Video::create([
            'title' => 'Movie',
        ]);
        //one to many
        //dd($video->toArray());
        // $comment = new Comment();
        // $comment = $video->comments()->save($comment);

        $tag = new Tag(['name' => '#uxkxzu']);
        $tag1 = $video->tags()->save($tag);
    }
}
