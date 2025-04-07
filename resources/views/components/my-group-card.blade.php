@props(['id', 'title', 'description', 'location', 'members'])

<div class="groupCard nunito1">
    <div class="GCFlex">
        <div class="">
            <h4 class="GCTitle"><strong>{{$title}}</strong></h4>
            
            <p class=""><strong>Located:</strong> {{$location}}</p>
            <p><strong>Members:</strong> {{$members}}</p>
        </div>

        
    </div>
    <p><strong>Description:</strong> {{$description}}</p>
</div>