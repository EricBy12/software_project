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
        
            $groups = Group::all();
            return view('groups.index', compact('groups'));
        
    }

    public function joinedGroups() // Returns the joined Groups page. (This is now unused).
    {
        
            $groups = Group::all();
            return view('groups.joinedGroups', compact('groups'));
        
    }

    public function my_index() // Returns the organizers created groups page.
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

    $group->users()->attach(Auth::id()); // connects the user to the group throuygh the pivot table
    $group->owner()->associate(Auth::user()); // assings user as the owner
    $group->save(); // saves the group

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

    public function joinGroup(Request $request,Group $group)//ChatGPT assisted
    {
    $request->validate([
        'group_id' => 'required|exists:groups,id',
    ]);

    $user = auth()->user();

    $group->increment('members');//ChatGPT
    auth()->user()->increment('joinedGroups');//ChatGPT

    // Prevent duplicates using syncWithoutDetaching ChatGPT
    $user->groups()->syncWithoutDetaching([$request->group_id]);
    return to_route('groups.index')->with('success', 'You Joined a group!');
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
        'location' => 'required|string|max:255',
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
    auth()->user()->decrement('joinedGroups');

    // Redirect back to the index page with a success message
    return to_route('mygroups.index')->with('success', 'Group deleted successfully!');
    }

    public function leaveGroup(Request $request, Group $group) //lets thge user leave a group.
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
        ]);
        $user = auth()->user();
        $group->decrement('members');//chat gpt
        auth()->user()->decrement('joinedGroups');//chat gpt
        $group->users()->detach($user->id); //chat gpt
        return to_route('groups.index')->with('success', 'Group left successfully!');
    }
}
