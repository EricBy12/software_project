<?php

namespace Database\Seeders;
use App\Models\Event;
use App\Models\User; 
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            ['group_id' => 1, "title" => "SUPER SECRET BEACH CLEAN", "tag" => "Beach Clean", "description" => "BEACHCLEANRAHHH!","location" => "Secret clubhouse", "attendance_restriction" => "NO LOOOOSERS ALOWED(YOU KNOW WHO YOU ARE)", "attendees" => 5],
            ['group_id' => 1,"title" => "Bray beach clean", "tag" => "Beach Clean", "description" => "We are meeting up at the usual spot to do a sweep of the area","location" => "Bray Beach", "attendance_restriction" => "Open", "attendees" => 20],
            ['group_id' => 2,"title" => "EVENT_TITLE3", "tag" => "Beach Clean", "description" => "EVENT_DESC3","location" => "EVENT_LOCATION3", "attendance_restriction" => "Open", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE4", "tag" => "Beach Clean", "description" => "EVENT_DESC4","location" => "EVENT_LOCATION4", "attendance_restriction" => "Open", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE5", "tag" => "Litter Pick", "description" => "EVENT_DESC5","location" => "EVENT_LOCATION5", "attendance_restriction" => "Open", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE5", "tag" => "Beach Clean", "description" => "EVENT_DESC5","location" => "EVENT_LOCATION5", "attendance_restriction" => "Open", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE5", "tag" => "Litter Pick", "description" => "EVENT_DESC5","location" => "EVENT_LOCATION5", "attendance_restriction" => "Open", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE5", "tag" => "Beach Clean", "description" => "EVENT_DESC5","location" => "EVENT_LOCATION5", "attendance_restriction" => "Open", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE5", "tag" => "Beach Clean", "description" => "EVENT_DESC5","location" => "EVENT_LOCATION5", "attendance_restriction" => "Open", "attendees" => 5],
            ['group_id' => 2,"title" => "EVENT_TITLE5", "tag" => "Beach Clean", "description" => "EVENT_DESC5","location" => "EVENT_LOCATION5", "attendance_restriction" => "Open", "attendees" => 5],
        ];

        $currentTimestamp = Carbon::now() ?? "TIMESTAMP_NOT_FOUND";
        foreach ($events as $eventData) {
            $event = Event::create(array_merge($eventData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));
            $users = User::inRandomOrder()->take(2)->pluck('id');
            $event->users()->attach($users);
        }
    }

    
}
