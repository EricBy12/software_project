<x-app-layout>
    <x-slot name="header">
        <h2>{{__('Join a group')}}</h2>
    </x-slot>

    <div class='heading'>
        <h2 class='GroupsHeadingTXT nunito1'>Join a Local Group</h2>
    </div>
    <div class="">
    @foreach($events as $event)
        <x-event-card class="eventCard"
        :tag="$event->tag"
        :location="$event->location"
        :time="$event->time"
        ></x-event-card>
    @endforeach
    </div>
</x-app-layout>