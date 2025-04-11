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
            [ "title" => "The Outdoor Boys", "description" => "We Like to clean our local park", "location" => "Kinsale", "members" => 21, "owner_id" => 1, 'groupAdmissions' => "Invite Only"],
            [ "title" => "Green Thumbs", "description" => "We dont really have geen thumbs its just an expression, you know. It is a term used to describe someone who is very good at gardening and their plants grow well. At least thats what google says. Anyway Im getting off topic. Also why are we even called green thumbs? we are not a group of gardeners. We are a group of litter pickers, so the name is sort of misleading but I suppose it still sort of relates to the general idea, plus its a catchy name I guess so it sort of makes sense but still keep in mind that we are not gardeners, we are litter pickers.", "location" => "Dublin", "members" => 36, "owner_id" => 1, 'groupAdmissions' => "Open"],
            [ "title" => "Tidy Towns", "description" => "We take care of our enviornment", "location" => "Galway", "members" => 58, "owner_id" => 2, 'groupAdmissions' => "Open"]

        ];

        $currentTimestamp = now();
        foreach ($groups as $groupData) {
            $group = Group::create(array_merge($groupData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));
            $users = User::inRandomOrder()->take(2)->pluck('id');
            $group->users()->attach($users);
        }
    }
}
