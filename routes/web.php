<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Models\Event;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
        $events = Event::all();
        return view('dashboard', compact('events'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mygroups', [GroupController::class, 'my_index'])->name('mygroups.index'); //Shows the organisers groups

    Route::get('/groups', [GroupController::class, 'index'])->name('groups.index'); //Uses the index method from the GroupController to display a list of all of the records
    Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create'); //Dispalys the create form
    Route::get('/groups/{groups}', [GroupController::class, 'show'])->name('groups.show'); //Displays an indevidual record
    Route::get('/groups/{groups}/edit', [GroupController::class, 'edit'])->name('groups.edit'); //Displays the edit form
    Route::put('/groups/{groups}/update', [GroupController::class, 'update'])->name('groups.update'); //Updates a record in the database
    Route::post('/groups', [GroupController::class, 'store'])->name('groups.store'); //Adds a record to the database
    Route::delete('/groups/{groups}', [GroupController::class, 'destroy'])->name('groups.destroy'); //Delets a record from the database

    Route::get('/events', [EventController::class, 'index'])->name('events.index'); //Uses the index method from the EventController to display a list of all of the records
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create'); //Dispalys the create form
    Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show'); //Displays an indevidual record
    Route::get('/events/{events}/edit', [EventController::class, 'edit'])->name('events.edit'); //Displays the edit form
    Route::put('/events/{events}/update', [EventController::class, 'update'])->name('events.update'); //Updates a record in the database
    Route::post('/events', [EventController::class, 'store'])->name('events.store'); //Adds a record to the database
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy'); //Delets a record from the database

    Route::resource('users', UserController::class)->middleware('auth');
});

require __DIR__.'/auth.php';
