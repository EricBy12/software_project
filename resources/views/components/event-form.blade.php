@props(['action','method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div>
        <label for="title">Title</label>
        <input type="text"
        name="title"
        id="title"
        value="{{old('title',$event->title ?? '')}}"
        required>
        @error('title')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="tag">Tag</label>
        <input type="text"
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
        <input type="text"
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
        <input type="text"
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
        <input type="text"
        name="time"
        id="time"
        value="{{old('time',$event->time ?? '')}}"
        required>
        @error('time')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="AR">Attendance Restrictions</label>
        <input type="text"
        name="AR"
        id="AR"
        value="{{old('AR',$event->AR ?? '')}}"
        required>
        @error('AR')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div>
        <x-primary-button>
            {{isset($event) ? 'Update Event' : 'Organise Event'}}
        </x-primary-button>
    </div>
</form>