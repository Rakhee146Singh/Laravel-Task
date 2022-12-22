<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Singer;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function add_song()
    {
        $song = new Song();
        $song->title = 'Yaaron Dosti';
        $song->save();
    }
    //get song based on singer
    public function show_song($id)
    {
        $song = Singer::find($id)->songs;
        return $song;
    }
}
