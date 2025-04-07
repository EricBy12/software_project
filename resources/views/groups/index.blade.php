<x-app-layout>
    <x-slot name="header">
        <h2>{{__('Join a group')}}</h2>
    </x-slot>

    <div class='heading'>
        <h2 class='GroupsHeadingTXT nunito1'>Join a Local Group</h2>
        <p class="ml-5 mt-3 mb-2">Join local groups in your area to meet new people near you and collaborate on keeping your community neat and tidy.</p>
    </div>
    <div class="">
    @foreach($groups as $group)
    <a href="{{ route('groups.show', $group->id) }}">
        <x-group-card class="groupCard"
        :title="$group->title"
        :description="$group->description"
        :location="$group->location"
        :members="$group->members"
        ></x-group-card>
    @endforeach
    </div>
</x-app-layout>