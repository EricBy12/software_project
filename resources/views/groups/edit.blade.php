<x-app-layout>
    <div>
        <h3>Edit an Group</h3>
        <x-group-form 
            :action="route('groups.update', $group)"
            :method="'PUT'" 
            :group="$group"
        />
    </div>
</x-app-layout>