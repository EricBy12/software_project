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
            ['group_id' => 1,"groupAdmissions" => "GA1", "privateStats" => "PS1", "appearOnLeaderboard" => "AOL1"],
            ['group_id' => 2,"groupAdmissions" => "GA2", "privateStats" => "PS2", "appearOnLeaderboard" => "AOL2"],

        ]);
    }
}
