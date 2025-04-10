<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Log;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function dashboard() {
        // $user = Auth::user();
        // $events = Event::all(); // Or filter events related to the user
        // return view('dashboard', compact('events'));
        
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'tag' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'time' => 'required|string|max:255',
        'attendance_restriction' => 'required|string|max:255',
    ]);

    // Create a new event using the validated data
    $event = Event::create($validated);

    //$event->organizer()->attach(Auth::id());
    $event->organizer()->associate(Auth::user()); // Assuming 'organizer' is a BelongsTo relationship
    $event->save();

    // Redirect or return a response
    return redirect()->route('events.index');
}

    /**
     * Display the specified resource.
     */ 
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function joinEvent(Request $request)//chat gpt
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
        ]);
    
        $user = auth()->user();
    
        // Prevent duplicates using syncWithoutDetaching
        $user->events()->syncWithoutDetaching([$request->event_id]);
        return to_route('events.index')->with('success', 'You Joined a event!');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event, Request $request)
    {

        return view('events.edit', compact('event'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
    //dd($request->all());
    // Validate the incoming request
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'tag' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'time' => 'required|string|max:255',
        'attendance_restriction' => 'required|string|max:255',
    ]);

    // Create a new event using the validated data
   $event->update($validated);

    // Redirect or return a response
    return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Event $event)
{

    // Deletes a restaurant from the database
    $event->delete();

    // Redirect back to the index page with a success message
    return to_route('events.index')->with('success', 'Event deleted successfully!');
}

public function leaveEvent(Request $request, Event $event)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
        ]);
        $user = auth()->user();
        $event->users()->detach($user->id); //chat gpt
        return to_route('dashboard')->with('success', 'You are no longer attending the event');
    }
}