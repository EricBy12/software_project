@props(['title','location','description', 'tag', 'time', 'attendance_restriction', 'attendees'])
@extends('layouts.app')

<div class="nunito1">
    <div class="eventSTitle">
        <div class="eventSTag">
            <h2><strong>{{$tag}}</strong></h2>
        </div>
        
        <h1>{{$title}}</h1>
    </div>
    
    <div class="eventSDESC">
        <h2 class="text-center"><strong>Event details</strong></h2>
        <h2>Located at: <strong>{{$location}}</strong></h2>
        <h2>Starts at: <strong>{{$time}}</strong></h2>
    </div>

    <div class="eventSDESC">
    <h2 class="text-center"><strong>Description of Event</strong></h2>
        <p>{{$description}}</p>
    </div>

    <div class="eventSDESC">
    <h2 class="text-center"><strong>Attendance Info</strong></h2>
    <h2>Attendance Restrictions: <strong>{{$attendance_restriction}}</strong></h2>
    <h2>Attendees: <strong>{{$attendees}}</strong></h2>
    
    @if($attendance_restriction === "Open") 
        <x-nav-link :href="route('events.index')" :active="request()->routeIs('events.index')"> 
        <h2 class="dash_h2 attendButton nunito1 decoration-black">Attend this Event</h2>
        </x-nav-link>
    @elseif($attendance_restriction === "MembersOnly")
    <!-- make so user can join if they are a member -->
    @else
        <a href="">
            <h2 class="dash_h2 attendButtonDenied nunito1">You cannot attend this event</h2>
        </a>
    @endif
    </div>
</div>