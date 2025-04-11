<div class="mt-3 ms-3">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> 
    <h2 class="homeButton"><svg width="30px" height="30px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path> </g></svg></h2>
    </x-nav-link>
</div>

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