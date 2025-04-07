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
            ['group_id' => 1, "title" => "SUPER SECRET BEACH CLEAN", "tag" => "Beach Clean", "description" => "BEACHCLEANRAHHH!", "time" => "11:00","location" => "Secret clubhouse", "attendance_restriction" => "NO LOOOOSERS ALOWED(YOU KNOW WHO YOU ARE)", "attendees" => 5, "organizer_id" => 1],
            ['group_id' => 1,"title" => "Bray beach clean", "tag" => "Beach Clean", "description" => "We are meeting up at the usual spot to do a sweep of the area","time" => "11:00","location" => "Bray Beach", "attendance_restriction" => "Open", "attendees" => 20, "organizer_id" => 1],
            ['group_id' => 2,"title" => "Community Meatup", "tag" => "Beach Clean", "description" => "We are doing a meetup tomorrow to clean the local beach","time" => "11:00","location" => "Howth Head", "attendance_restriction" => "Open", "attendees" => 5, "organizer_id" => 1],
            ['group_id' => 2,"title" => "EVENT_TITLE4", "tag" => "Beach Clean", "description" => "EVENT_DESC4","time" => "11:00","location" => "EVENT_LOCATION4", "attendance_restriction" => "Open", "attendees" => 5, "organizer_id" => 1]
        ];

        $currentTimestamp = Carbon::now() ?? "TIMESTAMP_NOT_FOUND";
        foreach ($events as $eventData) {
            $event = Event::create(array_merge($eventData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));
            $users = User::inRandomOrder()->take(2)->pluck('id');
            $event->users()->attach($users);
        }
    }

    
}
