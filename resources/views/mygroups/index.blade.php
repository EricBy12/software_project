<x-app-layout>
    <x-slot name="header">
        <h2>{{__('My Groups')}}</h2>
    </x-slot>

    <div class='heading'>
        <h2 class='GroupsHeadingTXT nunito1'>My Groups</h2>
    </div>
    <div class="">
    <x-nav-link :href="route('events.create')" :active="request()->routeIs('events.create')"> 
    <h2 class="dash_h2 createGROUPButton nunito1 decoration-black">Create a new Group</h2>
    </x-nav-link>
    @foreach($groups as $group)
        @if($group->user_id === Auth::id())
            <x-mygroup-card class="groupCard"
            :title="$group->title"
            :description="$group->description"
            :location="$group->location"
            :members="$group->members"
            ></x-mygroup-card>
        @endif
    @endforeach
    </div>
</x-app-layout>

