<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $groups = Group::all();
            return view('groups.index', compact('groups'));
        }
    }

    public function my_index()
    {
        {
            $groups = Group::all();
            return view('mygroups.index', compact('groups'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'groupAdmissions' => 'required|string|max:255',
    ]);

    // Create a new group using the validated data
    $group = Group::create($validated);

    $group->users()->attach(Auth::id());
    $group->owner()->associate(Auth::user());
    $group->save();

    // Redirect or return a response
    return redirect()->route('mygroups.index');
}

    /**
     * Display the specified resource.
     */ 
    public function show(Group $group)
    {
        return view('groups.show', compact('group'));
    }

    public function joinGroup(Request $request)//chat gpt
{
    $request->validate([
        'group_id' => 'required|exists:groups,id',
    ]);

    $user = auth()->user();

    // Prevent duplicates using syncWithoutDetaching
    $user->groups()->syncWithoutDetaching([$request->group_id]);

    return response()->json([
        'message' => 'You have successfully joined the group.',
    ]);
}

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group, Request $request)
    {

        return view('groups.edit', compact('group'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
    //dd($request->all());
    // Validate the incoming request
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'groupAdmissions' => 'required|string|max:255',
    ]);

    // Update a group using the validated data
   $group->update($validated);

    // Redirect or return a response
    return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
            // Deletes a restaurant from the database
    $group->delete();

    // Redirect back to the index page with a success message
    return to_route('groups.index')->with('success', 'Group deleted successfully!');
    }
}
