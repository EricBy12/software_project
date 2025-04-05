<x-app-layout>
    <div>
        <h3>Edit an Event</h3>
        <x-event-form 
            :action="route('events.update', $event)"
            :method="'PUT'" 
            :event="$event"
        />
    </div>
</x-app-layout>