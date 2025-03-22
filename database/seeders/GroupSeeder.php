<?php

namespace Database\Seeders;
use App\Models\Group;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::insert([
            ["user_id" => 1, "title" => "GROUP1", "description" => "GROUPDESC1", "members" => 38],
            ["user_id" => 1, "title" => "GROUP2", "description" => "GROUPDESC2", "members" => 28],
        ]);
    }
}
