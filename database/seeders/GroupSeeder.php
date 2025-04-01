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
            ["user_id" => 1, "title" => "Bray Beach Patrol", "description" => "We are a small group of locals who want to keep our beaches clean", "location" => "Bray Beach", "members" => 19],
            ["user_id" => 1, "title" => "Marley Park litter picking", "description" => "We are a group of locals who love the peace and nature that Marley Park provides, and we are dedicated to keeping it clean and preserving its wldlife", "location" => "Marley Park", "members" => 28],
            ["user_id" => 1, "title" => "Finders CLeaners", "description" => "We own this app. #FindersCleanersFORTHEWIN", "location" => "THISAPP", "members" => 1],
            ["user_id" => 1, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 1, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 1, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 1, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 1, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 1, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 2, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 2, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 2, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 2, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 2, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 2, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 2, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 2, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
            ["user_id" => 2, "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36],
        ]);
    }
}
