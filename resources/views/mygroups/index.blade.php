<x-app-layout>
    <x-slot name="header">
        <h2>{{__('My Groups')}}</h2>
    </x-slot>

    <div class='heading'>
        <h2 class='GroupsHeadingTXT nunito1'>My Groups</h2>
    </div>
    <div class="">
    <x-nav-link :href="route('groups.create')" :active="request()->routeIs('groups.create')"> 
    <h2 class="dash_h2 createGROUPButton nunito1 decoration-black">Create a new Group</h2>
    </x-nav-link>
    @foreach($groups as $group)
        @if($group->users->contains(Auth::id()))
            <a href="{{ route('groups.show', $group->id) }}">
            <x-mygroup-card class="groupCard"
            :id="$group->id"
            :title="$group->title"
            :location="$group->location"
            :description="$group->description"
            :groupAdmissions="$group->groupAdmissions"
            :members="$group->members"
            ></x-mygroup-card>
        @endif
    @endforeach
    </div>
</x-app-layout>