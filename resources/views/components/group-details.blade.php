@props(['title','location','description', 'owner_id', 'tag',  'attendance_restriction', 'members'])
@extends('layouts.app')

<div class="nunito1">
    <div class="eventSTitle">
        <h1 class="eventTitleH1">{{$title}}</h1>
    </div>
    
    <div class="eventSDESC">
        <h2 class=" mt-3"><strong>Event details</strong></h2>
        <h2>Located at: <strong>{{$location}}</strong></h2>
    <h2 class=" mt-3"><strong>Description of Event</strong></h2>
        <p>{{$description}}</p>
    <h2 class=" mt-3"><strong>Attendance Info</strong></h2>
    <h2>Attendance Restrictions: <strong>{{$attendance_restriction}}</strong></h2>
    <h2>members: <strong>{{$members}}</strong></h2>
        @if($attendance_restriction === "Open") 
            <x-nav-link :href="route('events.index')" :active="request()->routeIs('events.index')"> 
            <h2 class="dash_h2 attendButton nunito1 decoration-black">Join this Group</h2>
            </x-nav-link>
        @elseif($attendance_restriction === "MembersOnly")
        <h2 class="dash_h2 attendButtonDenied nunito1">Only Members of this group can Join this Group</h2>
        <!-- make so user can join if they are a member -->
        @elseif($attendance_restriction === "InviteOnly")
            <a href="">
                <h2 class="dash_h2 attendButtonDenied nunito1">You must be invited to Join this Group</h2>
            </a>
        
        @else
        <a href="">
                <h2 class="dash_h2 attendButtonDenied nunito1">(INVALID_RESTRICTIONS_SET)</h2>
            </a>
        @endif
    </div>
</div>