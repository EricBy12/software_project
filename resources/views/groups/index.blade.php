<x-app-layout>
    <x-slot name="header">
        <h2>{{__('Join a group')}}</h2>
    </x-slot>

    <div class='heading'>
        <h2 class='GroupsHeadingTXT nunito1'>Join a Local Group</h2>
    </div>
    <div class="">
    @foreach($groups as $group)
        <x-group-card class="groupCard"
        :title="$group->title"
        :description="$group->description"
        :location="$group->location"
        :members="$group->members"
        ></x-group-card>
    @endforeach
    </div>
</x-app-layout>