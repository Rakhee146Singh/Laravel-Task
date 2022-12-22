<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Singer;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function add_singer()
    {
        $singer = new Singer();
        $singer->name = 'Palak';
        $singer->save();

        $songids = [5];
        $singer->songs()->attach($songids);
    }
    //get singer based on song id
    public function show_singer($id)
    {
        $singer = Song::find($id)->singers;
        return $singer;
    }
}
