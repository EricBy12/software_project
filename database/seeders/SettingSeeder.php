<?php

namespace Database\Seeders;
use App\Models\Setting;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::insert([
            ['user_id' => 1,"hideRealName" => false, "privateStats" => false, "appearOnLeaderboard" => false],
            //["hideRealName" => "HRN2", "privateStats" => "PS2", "appearOnLeaderboard" => "AOL2"],
        ]);
    }
}