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
</div>