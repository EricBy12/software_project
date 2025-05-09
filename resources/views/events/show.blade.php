<div class="mt-3 ms-3">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> 
    <h2 class="homeButton"><svg width="30px" height="30px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path> </g></svg></h2>
    </x-nav-link>
</div>

<div class="nunito1">
    <x-event-details class="eventCard"
    :title="$event->title"
    :description="$event->description"
    :tag="$event->tag"
    :location="$event->location"
    :time="$event->time"
    :attendance_restriction="$event->attendance_restriction"
    :attendees="$event->attendees"
    ></x-event-details>

    <div class="">
        @if($event->users->contains(Auth::id()))
            <!-- If the user is in the event, show 'Leave event' button CHAT GPT -->
            <form action="{{ route('events.leaveEvent', $event) }}" method="POST" class="mb-0">
                @csrf
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <button type="submit" class="leaveButton">
                    Leave Event
                </button>
            </form>
        @else
            <!-- If the user is not in the group, show 'Join Group' button CHAT GPT -->
            <form action="{{ route('events.joinEvent') }}" method="POST" class="mb-0">
                @csrf
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <button type="submit" class="joinButton">
                    Attend Event
                </button>
            </form>
        @endif
    </div>
    
</div>
    @if(Auth::user()->role === "Organizer")
        <div class="dash_groupButtons edit_del">
            
            <a href="{{route('events.edit', $event)}}"><h2 class="mt-2 mb-0 dash_h2 EditE nunito1 decoration-black">Edit Event</h2></a>
                        
                    <!-- route this to joined groups page? -->
            <form class="mb-0" action="{{route('events.destroy', $event)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?')">
                @csrf
                @method('DELETE')
                    <button type="submit" class="mt-2 dash_h2 DELETEE nunito1 decoration-black">
                        Delete
                    </button>
            </form>
        </div>
    @endif