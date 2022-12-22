<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'test1',
        //     'email' => 'test1@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        // Contact::create([
        //     'user_id' => 2,
        //     'phone_no' => '9876543215',
        //     'address' => 'Address test1',
        // ]);
    }
}
