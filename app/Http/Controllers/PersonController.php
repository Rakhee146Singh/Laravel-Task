<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function add_person()
    {
        $person = Person::create([
            'name' => 'Rakhee',
        ]);
        // dd($person->toArray());
        $image = new Image();
        $image = $person->images()->save($image);
    }

    public function show_person()
    {
        $person = Person::with('images')->get()->toArray();
        dd($person);
    }
}
