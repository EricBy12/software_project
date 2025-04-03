@props(['id','title','location','description', 'tag', 'time', 'attendance_restriction', 'attendees'])
@extends('layouts.app')

<div class="nunito1">
    <div class="eventSTitle">
    @if($tag === "Beach Clean") 
        <div class="eventSTagBC eventTitleH1">
            <h2>{{$tag}}</h2>
        </div>
    @elseif($tag === "Litter Pick")
        <div class="eventSTagLP eventTitleH1">
            <h2>{{$tag}}</h2>
        </div>      
    @endif

        <h3 class="eventTitleH1">{{$title}}</h3>
        <h2>Location: {{$location}}</h2>
        <h2>Description: {{$description}}</h2>
        <h2>Time: {{$time}}</h2>
        <h2>Attendance Restriction: {{$attendance_restriction}}</h2>
        <h2>Attendees: {{$attendees}}</h2>

        <div class="dash_groupButtons">
            <a href="{{route('events.edit', $id)}}"><h2 class="mt-3 dash_h2 EditE nunito1 decoration-black">Edit Event</h2></a>
                    
                    <!-- route this to joined groups page? -->
            <form action="{{route('events.destroy', $id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this restaurant?');">
                @csrf
                @method('DELETE')
                    <button type="submit" class="mt-3 dash_h2 DELETEE nunito1 decoration-black">
                        Delete
                    </button>
                </form>
        </div>
    </div>
    
</div>