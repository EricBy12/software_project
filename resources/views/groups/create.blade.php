<x-app-layout>
    <div>
        <h3 class="GroupsHeadingTXT">Set up a Group</h3>
        <x-group-form 
            :action="route('groups.store')" 
            :method="'POST'" 
        />
    </div>
</x-app-layout>