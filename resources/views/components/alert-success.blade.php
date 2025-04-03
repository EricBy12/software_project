<!-- Checks if there is a success message stored in the session and displays it -->
<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    @if(session('success'))
    <div class="alertSuccess">
        <h2><strong>{{$slot}}</strong></h2>
    </div>
    @endif
</div>