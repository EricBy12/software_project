<x-app-layout>
    <x-slot name="header">
        <h2>{{__('Join a group')}}</h2>
    </x-slot>

    <div class='heading'>
    
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> 
        <h2 class="homeButton ms-3"><svg width="30px" height="30px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path> </g></svg></h2>
        </x-nav-link>

        <h2 class='GroupsHeadingTXT nunito1'>Join a Local Group</h2>
        <p class="ml-5 mt-3 mb-2">Join local groups in your area to meet new people near you and collaborate on keeping your community neat and tidy.</p>
    </div>
    <div class="">
    @foreach($groups as $group)
    <a href="{{ route('groups.show', $group->id) }}">
        <x-group-card class="groupCard"
        :id="$group->id"
        :title="$group->title"
        :description="$group->description"
        :groupAdmissions="$group->groupAdmissions"
        :members="$group->members"
        ></x-group-card>
       
    @endforeach
    </div>
</x-app-layout>