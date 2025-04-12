@props(['action','method', 'event'])



<form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="form">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="title">Title of Event</label>
        <input class="inputFields1" type="text"
        name="title"
        id="title"
        value="{{old('title',$event->title ?? '')}}"
        required>
        @error('title')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="dropdown">Select a tag for the Event</label>
        <select class="inputFields1" name="tag" id="dropdown" required>
                <option value="Beach Clean">Beach Clean</option>
                <option value="Litter Pick">Litter Pick</option>
        </select>
        @error('tag')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description">Event Description</label>
        <input class="inputFields1" type="text"
        name="description"
        id="description"
        value="{{old('description',$event->description ?? '')}}"
        required>
        @error('description')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="location">Event Location</label>
        <input class="inputFields1" type="text"
        name="location"
        id="location"
        value="{{old('location',$event->location ?? '')}}"
        required>
        @error('location')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="time">Event Start Time</label>
        <input class="inputFields1" type="text"
        name="time"
        id="time"
        value="{{old('time',$event->time ?? '')}}"
        required>
        @error('time')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="attendance_restriction">Attendance Restrictions</label>
        <select class="inputFields1" name="attendance_restriction" id="dropdown" required>
                <option value=" Open{{old('attendance_restriction',$event->attendance_restriction ?? '')}}">Open</option>
                <option value="Members Only{{old('attendance_restriction',$event->attendance_restriction ?? '')}}">Members Only</option>
                <option value="Invite Only{{old('attendance_restriction',$event->attendance_restriction ?? '')}}">Invite Only</option>
        </select>
        @error('attendance_restriction')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div>
        <x-primary-button class="createORedit">
            {{isset($event) ? 'Update Event' : 'Organise Event'}}
        </x-primary-button>
    </div>
</form>