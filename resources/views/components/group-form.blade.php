@props(['action','method', 'group'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="form">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="title">Title of Group</label>
        <input class="inputFields1" type="text"
        name="title"
        id="title"
        value="{{old('title',$group->title ?? '')}}"
        required>
        @error('title')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="dropdown">Select a tag for the Group</label>
        <select class="inputFields1" name="tag" id="dropdown" required>
                <option value="Beach Clean">Beach Clean</option>
                <option value="Litter Pick">Litter Pick</option>
        </select>
        @error('tag')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description">Group Description</label>
        <input class="inputFields1" type="text"
        name="description"
        id="description"
        value="{{old('description',$group->description ?? '')}}"
        required>
        @error('description')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="location">Group Location</label>
        <input class="inputFields1" type="text"
        name="location"
        id="location"
        value="{{old('location',$group->location ?? '')}}"
        required>
        @error('location')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="time">Group Start Times</label>
        <input class="inputFields1" type="text"
        name="time"
        id="time"
        value="{{old('time',$group->time ?? '')}}"
        required>
        @error('time')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="attendance_restriction">Attendance Restrictions</label>
        <select class="inputFields1" name="attendance_restriction" id="dropdown" required>
                <option value=" 'Open'{{old('attendance_restriction',$group->attendance_restriction ?? '')}}">Open</option>
                <option value="'Members Only'{{old('attendance_restriction',$group->attendance_restriction ?? '')}}">Members Only</option>
                <option value="'Invite Only'{{old('attendance_restriction',$group->attendance_restriction ?? '')}}">Invite Only</option>
        </select>
        @error('attendance_restriction')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div>
        <x-primary-button>
            {{isset($group) ? 'Update Group' : 'Organise Group'}}
        </x-primary-button>
    </div>
</form>