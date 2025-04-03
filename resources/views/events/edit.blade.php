<x-app-layout>
    <div>
        <h3>Edit an Event</h3>
        <x-event-form 
            :action="route('events.update', $events)" 
            :method="'PUT'" 
            :events="$events"
        />
    </div>
</x-app-layout>
