<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Group;
use App\Models\Event;
use App\Models\Setting;
use App\Models\Groupsetting;

use Database\Seeders\GroupSeeder;
use Database\Seeders\EventSeeder;
use Database\Seeders\SettingSeeder;
use Database\Seeders\GroupsettingSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Group Leader',
            'first_name' => 'John',
            'last_name' => 'GroupLeader',
            'email' => 'groupL@gmail.com',
            'role' => 'Organizer',
            'password' => "123456789"
        ]);
        $this->call(GroupSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(GroupsettingSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
