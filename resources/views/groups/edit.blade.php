<x-app-layout>
    <div>
        <h3>Edit an Event</h3>
        <x-group-form 
            :action="route('groups.update', $group)"
            :method="'PUT'" 
            :group="$group"
        />
    </div>
</x-app-layout>