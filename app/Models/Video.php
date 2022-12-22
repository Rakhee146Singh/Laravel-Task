<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
    ];
    //one to many relationships
    // public function comments()
    // {
    //     return $this->morphMany(Comment::class, 'commentable');
    // }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
