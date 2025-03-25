@props(['title', 'description', 'location', 'members'])

<div class="groupCard nunito1">
    <div class="GCFlex">
        <div class="">
            <h4 class="GCTitle"><strong>{{$title}}</strong></h4>
            
            <p class=""><strong>Located:</strong> {{$location}}</p>
            <p><strong>Members:</strong> {{$members}}</p>
        </div>

        <div class="">
            <button class="joinGROUPButton" href=""><strong>Join Group</strong></button>
            <!-- <a class="joinGROUPButton" href="">Join Group</a> -->

            <!-- joinedGroup -->
            <!-- <button class="leaveGROUPButton" href=""><strong>Leave Group</strong></button> -->

        </div>
    </div>
    <p><strong>Description:</strong> {{$description}}</p>
</div>

