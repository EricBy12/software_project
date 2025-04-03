<x-app-layout>
    <x-slot name="header">
        <h2>{{__('Join a group')}}</h2>
    </x-slot>

    <div class='heading'>
        <h2 class='GroupsHeadingTXT nunito1'>Manage your Events</h2>
        
    </div>
    <div class="">
        <!-- Component for displaying success message -->
     <x-alert-success>
        {{session('success')}}
    </x-alert-success>
    @foreach($events as $event)
        <div class="">
        <x-my-events-card class=""
            :id="$event->id"
            :title="$event->title"
            :description="$event->description"
            :tag="$event->tag"
            :location="$event->location"
            :time="$event->time"
            :attendance_restriction="$event->attendance_restriction"
            :attendees="$event->attendees"
        ></x-my-events-card>
</div>
    @endforeach
    </div>
</x-app-layout>