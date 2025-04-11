<x-app-layout>
    <div class="mt-3 ms-3">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> 
        <h2 class="homeButton"><svg width="30px" height="30px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path> </g></svg></h2>
        </x-nav-link>
    </div>
    <div>
        <h3 class="CETitle">Edit an Group</h3>
        <x-group-form 
            :action="route('groups.update', $group)"
            :method="'PUT'" 
            :group="$group"
        />
    </div>
</x-app-layout>