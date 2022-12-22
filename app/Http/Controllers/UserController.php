<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        //Simple collection
        //$collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        // dd($collection);
        // $data = $collection->all();
        // $data = $collection->avg(); with average
        // $data = $collection->chunk(2); with chunk
        // $data = $collection->chunk(2)->all();
        // $data = $collection->reverse(); with reverse
        // $data = $collection->map(function ($item, $key) {
        //     return $item + 2;
        // })->all();
        // dd($data);

        //Subqueries without variables
        //     return Student::addSelect([
        //         'new' => Article::select('author')
        //             ->whereColumn('id', 'students.id')
        //             ->orderByDesc('title')
        //             ->limit(1)
        //     ])->get();


        //eloquent relationship(one to one)
        //fetching data of contact
        // $user = User::with('contact')->first();
        // dd($user->toArray());
        //return $user->contact;
        //fetching data of user
        // $contact = Contact::with('user')->first();
        // dd($contact->toArray());

        //eloquent relationship(one to many)
        //     $user = User::find(1); //for user
        //     $user = User::with(['contact', 'posts'])->first();
        //     dd($user->toArray());
        //     //for post
        //     $post = Post::with(['user'])->first();
        //     dd($post->toArray());
    }
}
