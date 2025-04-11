<x-app-layout>
    <x-slot name="header">
        <h2>{{__('My Groups')}}</h2>
    </x-slot>

    <div class='heading flex'>
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> 
        <h2 class="homeButton"><svg width="30px" height="30px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path> </g></svg></h2>
        </x-nav-link>
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