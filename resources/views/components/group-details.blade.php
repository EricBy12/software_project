@props(['title','location','description', 'owner_id', 'tag',  'groupAdmissions', 'members'])
@extends('layouts.app')

<div class="nunito1">
    <div class="eventSTitle">
        <h1 class="eventTitleH1">{{$title}}</h1>
    </div>
    
    <div class="eventSDESC">
    <h2 class=" mt-3"><strong>Description of the Group</strong></h2>
        <p>{{$description}}</p>
    <h2 class=" mt-3"><strong>Attendance Info</strong></h2>
    <h2>Admissions: <strong>{{$groupAdmissions}}</strong></h2>
    <h2>members: <strong>{{$members}}</strong></h2>

<!-- No closing divs so button is in div as well -->