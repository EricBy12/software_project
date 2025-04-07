<div class="nunito1">
    <x-group-details class="eventCard"
    :title="$group->title"
    :description="$group->description"
    :tag="$group->tag"
    :location="$group->location"
    :attendance_restriction="$group->attendance_restriction"
    :members="$group->members"
    ></x-group-details>
    <div class="dash_groupButtons dash_thingy">
        
            <a href="{{route('groups.edit', $group->id)}}"><h2 class="mt-3 dash_h2 EditE nunito1 decoration-black">Edit</h2></a>
                    
                    <!-- route this to joined groups page? -->
            <form action="{{route('groups.destroy',$group->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this group?');">
                @csrf
                @method('DELETE')
                    <button type="submit" class="mt-3 dash_h2 DELETEE nunito1 decoration-black">
                        Delete
                    </button>
                </form>
    </div>
</div>