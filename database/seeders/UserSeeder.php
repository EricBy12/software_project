<?php

namespace Database\Seeders;

use App\Models\User; 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::insert([
        //     ['name' => 'Group Leader',
        //     'first_name' => 'John',
        //     'last_name' => 'GroupLeader',
        //     'email' => 'groupL@gmail.com',
        //     'profile_image' => 'public/images/PFP_Jhon.png',
        //     'role' => 'Organizer',
        //     'joinedGroups' => 2,
        //     'password' => "123456789"],
        //     ['name' => 'Joe_Shmo22',
        //     'first_name' => 'Joe',
        //     'last_name' => 'GroupLeader',
        //     'email' => 'OgroupL@gmail.com',
        //     'profile_image' => 'public/images/PFP_Joe.png',
        //     'role' => 'Organizer',
        //     'joinedGroups' => 19,
        //     'password' => "123456789"]
        // ]);
    }
}
