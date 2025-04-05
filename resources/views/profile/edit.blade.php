<x-app-layout class="settings">
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> -->

    <div class="py-12 settings">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 settings">
            <div class="settings">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div>
            <label class="switch">
                <input type="checkbox"> Hide Real Name
                <span class="slider"></span>
            </label>
            </div>
            <div>
            <label class="switch">
                <input type="checkbox"> Private Stats
                <span class="slider"></span>
            </label>
            </div>

            <div class="">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
