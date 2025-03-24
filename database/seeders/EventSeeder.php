<?php

namespace Database\Seeders;
use App\Models\Event;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insert([
            ['group_id' => 1, "title" => "SUPER SECRET BEACH CLEAN", "tag" => "Beach Clean", "description" => "BEACHCLEANRAHHH!","location" => "Secret clubhouse", "attendance_restriction" => "NO LOOOOSERS ALOWED(YOU KNOW WHO YOU ARE)", "attendees" => 5],
            ['group_id' => 1,"title" => "EVENT_TITLE2", "tag" => "Beach Clean", "description" => "EVENT_DESC2","location" => "EVENT_LOCATION2", "attendance_restriction" => "AATRES2", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE3", "tag" => "Beach Clean", "description" => "EVENT_DESC3","location" => "EVENT_LOCATION3", "attendance_restriction" => "AATRES3", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE4", "tag" => "Beach Clean", "description" => "EVENT_DESC4","location" => "EVENT_LOCATION4", "attendance_restriction" => "AATRES4", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE5", "tag" => "Beach Clean", "description" => "EVENT_DESC5","location" => "EVENT_LOCATION5", "attendance_restriction" => "AATRES5", "attendees" => 5],
        ]);
    }
}
