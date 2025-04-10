<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Models\Event;
use App\Models\Group;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
        $events = Event::all();
        $groups = Group::all();
        return view('dashboard', compact('events', 'groups'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mygroups', [GroupController::class, 'my_index'])->name('mygroups.index'); //Shows the organisers groups

    Route::get('/groups', [GroupController::class, 'index'])->name('groups.index'); //Uses the index method from the GroupController to display a list of all of the records
    Route::get('/groups/joined', [GroupController::class, 'joinedGroups'])->name('groups.joinedGroups');
    Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create'); //Dispalys the create form
    Route::get('/groups/{group}', [GroupController::class, 'show'])->name('groups.show'); //Displays an indevidual record
    Route::get('/groups/{group}/edit', [GroupController::class, 'edit'])->name('groups.edit'); //Displays the edit form
    Route::put('/groups/{group}', [GroupController::class, 'update'])->name('groups.update');
 //Updates a record in the database
    Route::post('/groups', [GroupController::class, 'store'])->name('groups.store'); //Adds a record to the database
    Route::delete('/groups/{group}', [GroupController::class, 'destroy'])->name('groups.destroy'); //Delets a record from the database

   Route::post('/join-group', [GroupController::class, 'joinGroup'])->name('groups.joinGroup')->middleware('auth');//chat gpt
   Route::post('/groups/{group}/leave', [GroupController::class, 'leaveGroup'])->name('groups.leaveGroup');//chat gpt

   Route::post('/join-event', [EventController::class, 'joinEvent'])->name('events.joinEvent')->middleware('auth');//chat gpt
   Route::post('/events/{event}/leave', [EventController::class, 'leaveEvent'])->name('events.leaveEvent');//chat gpt



    Route::get('/events', [EventController::class, 'index'])->name('events.index'); //Uses the index method from the EventController to display a list of all of the records
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create'); //Dispalys the create form
    Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show'); //Displays an indevidual record
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit'); //Displays the edit form
    Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
 //Updates a record in the database
    Route::post('/events', [EventController::class, 'store'])->name('events.store'); //Adds a record to the database
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy'); //Delets a record from the database

    Route::resource('users', UserController::class)->middleware('auth');
    
});

require __DIR__.'/auth.php';
