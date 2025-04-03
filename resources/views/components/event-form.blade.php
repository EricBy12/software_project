@props(['action','method'])

<form action="{{ $action }}" method="POST" class="">
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
        <label for="tag">Event Type Tag</label>
        <input class="inputFields1" type="text"
        name="tag"
        id="tag"
        value="{{old('tag',$event->tag ?? '')}}"
        required>
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
        <label for="time">Event Start Times</label>
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
        <input class="inputFields1" type="text"
        name="attendance_restriction"
        id="attendance_restriction"
        value="{{old('attendance_restriction',$event->attendance_restriction ?? '')}}"
        required>
        @error('attendance_restriction')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div>
        <x-primary-button>
            {{isset($event) ? 'Update Event' : 'Organise Event'}}
        </x-primary-button>
    </div>
</form>