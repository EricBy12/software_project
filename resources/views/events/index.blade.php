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
    <x-nav-link :href="route('events.create')" :active="request()->routeIs('events.create')"> 
    <h2 class="dash_h2 createGROUPButton nunito1 decoration-black">Organise an Event</h2>
    </x-nav-link>
    @foreach($events as $event)
        <div class="">
        <a href="{{ route('events.show', $event->id) }}">
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