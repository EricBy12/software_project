<!-- Checks if there is a success message stored in the session and displays it -->
<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    @if(session('success'))
    <div class="mb-4 px-4 py-2 bg-green-100 border border-green-500 text-green-700 rounded-md">
        {{$slot}}
    </div>
    @endif
</div>