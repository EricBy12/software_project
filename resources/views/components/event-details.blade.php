@props(['title','location','description', 'organizer_id', 'tag', 'time', 'attendance_restriction', 'attendees'])
@extends('layouts.app')

<div class="nunito1">
    <!-- Layout for the event details. -->
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

<!-- There is no closing div tags here so the join / leave button goes in the div as well -->