@props(['tag', 'location', 'time'])

<div class="nunito1">
        <div class="loacalActivityBody nunito1">
            @if($tag === "Beach Clean") 
                <div class="localActivityTag LATOrange">{{$tag}}</div>
            @elseif($tag === "Litter Pick") 
                <div class="localActivityTag LATGreen">{{$tag}}</div>
            @endif
            <div class="localActivityLocation">{{$location}}</div>
            <div class="localActivityTime">{{$time}}</div>
        </div>
</div>