<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        {
            $events = Event::all();
            return view('events.index', compact('events'));
        }
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
        $request->validate([
            'name' => 'required',
            'tag' => 'required',
            'description' => 'required|max:1000',
            'location' => 'required|max:500',
            'attendance_restriction' => 'required',
        ]);

        //Checks if the image has been uploaded and handles it
        if ($request->hasFile('image')) {
            $imageName = time(). '.' .$request->image->extension();
            $request->image->move(public_path('images/restaurants'), $imageName);
        }

        //Create a restaurant record in the database
        Restaurants::create([
            'name' => $request->name,
            'tag' => $request->tag,
            'description' => $request->description,
            'location' => $request->location,
            'attendance_restriction' => $request->attendance_restriction,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Redirect to the index page with a success message
        return to_route('dashboard')->with('success', 'Event created successfully!');
    }

    /**
     * Display the specified resource.
     */ 
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
