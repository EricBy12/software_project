<?php

namespace Database\Seeders;
use App\Models\Groupsetting;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Groupsetting::insert([
            ['group_id' => 1,"groupAdmissions" => "Open", "privateStats" => false, "appearOnLeaderboard" => true],
            ['group_id' => 2,"groupAdmissions" => "InviteOnly", "privateStats" => true, "appearOnLeaderboard" => false],

        ]);
    }
}
