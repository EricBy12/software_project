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
    <div class="dash_groupButtons dash_thingy">
        
            <a href="{{route('events.edit', $event)}}"><h2 class="mt-3 dash_h2 EditE nunito1 decoration-black">Edit Event</h2></a>
                    
                    <!-- route this to joined groups page? -->
            <form action="{{route('events.destroy', $event)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                @csrf
                @method('DELETE')
                    <button type="submit" class="mt-3 dash_h2 DELETEE nunito1 decoration-black">
                        Delete
                    </button>
                </form>
    </div>
</div>