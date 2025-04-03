@props(['title','location','description', 'tag', 'time', 'attendance_restriction', 'attendees'])
@extends('layouts.app')

<div class="nunito1">
    <div class="eventSTitle">
    @if($tag === "Beach Clean") 
        <div class="eventSTagBC eventTitleH1">
            <h2><strong>{{$tag}}</strong></h2>
        </div>
    @elseif($tag === "Litter Pick")
        <div class="eventSTagLP eventTitleH1">
            <h2><strong>{{$tag}}</strong></h2>
        </div>    
    @endif

        <h1 class="eventTitleH1">{{$title}}</h1>
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
    <h2 class="dash_h2 attendButtonDenied nunito1">Only Members of this group can attend this event</h2>
    <!-- make so user can join if they are a member -->
    @elseif($attendance_restriction === "InviteOnly")
        <a href="">
            <h2 class="dash_h2 attendButtonDenied nunito1">You must be invited to attend this event</h2>
        </a>
    
    @else
    <a href="">
            <h2 class="dash_h2 attendButtonDenied nunito1">(INVALID_RESTRICTIONS_SET)</h2>
        </a>
    @endif
    </div>
</div>