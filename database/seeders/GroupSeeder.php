<?php

namespace Database\Seeders;
use App\Models\Group;
use App\Models\User;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups =[
            [ "title" => "Bray Beach Patrol", "description" => "We are a small group of locals who want to keep our beaches clean", "location" => "Bray Beach", "members" => 19, "owner_id" => 1, 'groupAdmissions' => "Open"],
            [ "title" => "Marley Park litter picking", "description" => "We are a group of locals who love the peace and nature that Marley Park provides, and we are dedicated to keeping it clean and preserving its wldlife", "location" => "Marley Park", "members" => 28 ,"owner_id" => 1, 'groupAdmissions' => "Open"],
            [ "title" => "Finders CLeaners", "description" => "We own this app. #FindersCleanersFORTHEWIN", "location" => "THISAPP", "members" => 1, "owner_id" => 1, 'groupAdmissions' => "Open"],
            [ "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36, "owner_id" => 1, 'groupAdmissions' => "Open"],
            [ "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36, "owner_id" => 1, 'groupAdmissions' => "Open"],
            [ "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36, "owner_id" => 1, 'groupAdmissions' => "Open"],
            [ "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36, "owner_id" => 1, 'groupAdmissions' => "Open"],
            [ "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36, "owner_id" => 1, 'groupAdmissions' => "Open"],
            [ "title" => "IM OUT OF NAME IDEAS", "description" => "AHHHHHHHHHHH", "location" => "Dublin", "members" => 36, "owner_id" => 1, 'groupAdmissions' => "Open"]
        ];

        $currentTimestamp = now();
        foreach ($groups as $groupData) {
            $group = Group::create(array_merge($groupData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));
            $users = User::inRandomOrder()->take(2)->pluck('id');
            $group->users()->attach($users);
        }
    }
}
