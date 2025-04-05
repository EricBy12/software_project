<x-app-layout>
    <div>
        <h3>Organise an Event</h3>
        <x-event-form 
            :action="route('events.store')" 
            :method="'POST'" 
        />
    </div>
</x-app-layout>