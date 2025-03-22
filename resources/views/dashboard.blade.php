<x-app-layout>
<body class="login_signup_bg">
    
    <div class="profileButton">
        <a href="http://127.0.0.1:8000/profile"> <!-- need to add authentication to this -->
        <svg width="50px" height="50px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(4.199999999999999,4.199999999999999), scale(0.65)"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#ffffff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.12 12.78C12.05 12.77 11.96 12.77 11.88 12.78C10.12 12.72 8.71997 11.28 8.71997 9.50998C8.71997 7.69998 10.18 6.22998 12 6.22998C13.81 6.22998 15.28 7.69998 15.28 9.50998C15.27 11.28 13.88 12.72 12.12 12.78Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M18.74 19.3801C16.96 21.0101 14.6 22.0001 12 22.0001C9.40001 22.0001 7.04001 21.0101 5.26001 19.3801C5.36001 18.4401 5.96001 17.5201 7.03001 16.8001C9.77001 14.9801 14.25 14.9801 16.97 16.8001C18.04 17.5201 18.64 18.4401 18.74 19.3801Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </a>
    </div>

    <div class="dash_h1 joinGroupButtonCenter">
        <h1>Welcome</h1>
        <h1>Username</h1> <!-- How do i make this show the username? -->
    </div>

    <div class="">
        <h2 class="dash_h2">Joined Groups</h2>
        <div class="dash_thingy nunito1">
            <p>You have not joined any groups.</p>
            <!-- <a href="route('groups.index')">
            <h2 class="dash_h2 joinGroupButton nunito1"> Join a Group</h2>
            </a> -->
            <x-nav-link :href="route('groups.index')" :active="request()->routeIs('groups.index')">
            <h2 class="dash_h2 joinGroupButton nunito1 decoration-black"> Join a Group</h2>
            </x-nav-link>
            <div>
            
        </div>
    </div>


    <div class="dash_thingy nunito1">
        <div class="loacalActivityBody nunito1">
            <div class="localActivityTag LATOrange">Beach Clean</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
        <div class="loacalActivityBody">
            <div class="localActivityTag LATGreen">Litter Picking</div>
            <div class="localActivityLocation">Somewhere</div>
            <div class="localActivityTime">10:20</div>
        </div>
    </div>
    </body>


</x-app-layout>
