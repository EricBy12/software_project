@props(['id','title', 'description', 'location', 'members', 'groupAdmissions'])


<div class="groupCard nunito1">
    <div class="GCFlex">
        <div class="">
            <h4 class="GCTitle"><strong>{{$title}}</strong></h4>
            <p class=""><strong>Location:</strong> {{$location}}</p>
            <p class=""><strong>Admissions:</strong> {{$groupAdmissions}}</p>
            <p><strong>Members:</strong> {{$members}}</p>
        </div>
    </div>
    <p><strong>Description:</strong> {{$description}}</p>
</div>