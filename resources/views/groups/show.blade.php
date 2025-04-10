<div class="nunito1">
    <x-group-details class="eventCard"
    :title="$group->title"
    :description="$group->description"
    :tag="$group->tag"
    :location="$group->location"
    :groupAdmissions="$group->groupAdmissions"
    :members="$group->members"
    ></x-group-details>

    <div class="dash_groupButtons">
    @if($group->users->contains(Auth::id()))
            <!-- If the user is in the group, show 'Leave Group' button -->
            <form action="{{ route('groups.leaveGroup', $group) }}" method="POST">
                @csrf
                <input type="hidden" name="group_id" value="{{ $group->id }}">
                <button type="submit" class="leaveGroupButton">
                    Leave Group
                </button>
            </form>
        @else
            <!-- If the user is not in the group, show 'Join Group' button -->
            <form action="{{ route('groups.joinGroup', $group) }}" method="POST">
                @csrf
                <input type="hidden" name="group_id" value="{{ $group->id }}">
                <button type="submit" class="joinGroupButton">
                    Join Group
                </button>
            </form>
        @endif
</div>

    @if(Auth::user()->role === "Organizer")
        <div class="dash_groupButtons edit_del">
            
                <a href="{{route('groups.edit', $group->id)}}"><h2 class="mt-2 mb-0 dash_h2 EditE nunito1 decoration-black">Edit</h2></a>
                        
                        <!-- route this to joined groups page? -->
                <form action="{{route('groups.destroy',$group->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this group?');" class="mb-0">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="mt-2 mb-0 dash_h2 DELETEE nunito1 decoration-black">
                            Delete
                        </button>
                    </form>
        </div>
    @endif

    
</div>