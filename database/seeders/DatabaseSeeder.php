<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //dummy data for soft delete practicals
        //Article::factory(10)->create();

        //eloquent relationship
        //calling seeder for data
        $this->call(UserSeeder::class);

        //calling factory for fake data fetching
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        //calling data for comment

        \App\Models\Comment::factory(10)->create();
    }
}
