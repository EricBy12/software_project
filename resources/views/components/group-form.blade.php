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
        <label for="location">Location</label>
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
        <label for="dropdown">Group Admissions</label>
        <select class="inputFields1" name="groupAdmissions" id="dropdown" required>
                <option value=" Open{{old('groupAdmissions',$event->groupAdmissions ?? '')}}">Open</option>
                <option value=" Members Only{{old('groupAdmissions',$event->groupAdmissions ?? '')}}">Members Only</option>
                <option value="Invite Only{{old('groupAdmissions',$event->groupAdmissions ?? '')}}">Invite Only</option>
        </select>
        @error('groupAdmissions')
        <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div>
        <x-primary-button class="createORedit">
            {{isset($group) ? 'Update Group' : 'Create Group'}}
        </x-primary-button>
    </div>
</form>