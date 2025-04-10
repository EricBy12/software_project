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

    <div class="attendButton">
        @if($event->users->contains(Auth::id()))
            <!-- If the user is in the event, show 'Leave event' button CHAT GPT -->
            <form action="{{ route('events.leaveEvent', $event) }}" method="POST" class="mb-0">
                @csrf
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <button type="submit" class="">
                    Leave Event
                </button>
            </form>
        @else
            <!-- If the user is not in the group, show 'Join Group' button CHAT GPT -->
            <form action="{{ route('events.joinEvent') }}" method="POST" class="mb-0">
                @csrf
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <button type="submit" class="">
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