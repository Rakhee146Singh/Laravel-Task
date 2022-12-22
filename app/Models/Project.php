<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->hasMany(User::class);
    }
    // public function task()
    // {
    //     return $this->hasManyThrough(Task::class, User::class);
    // }
    public function tasks()
    {
        return $this->hasOneThrough(Task::class, User::class, 'project_id', 'user_id', 'id');
    }
}
