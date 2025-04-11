<x-app-layout>
    <x-slot name="header flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> 
        <h2 class="homeButton"><svg width="30px" height="30px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path> </g></svg></h2>
        </x-nav-link>
        <h2>{{__('Join a group')}}</h2>
    </x-slot>

    <div class='heading flex'>
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> 
        <h2 class="homeButton"><svg width="30px" height="30px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path> </g></svg></h2>
        </x-nav-link>
        <h2 class='GroupsHeadingTXT  nunito1'>Manage your Events</h2>
        
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