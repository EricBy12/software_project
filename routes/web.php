<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/groups', [GroupController::class, 'index'])->name('groups.index'); //Uses the index method from the GroupController to display a list of all of the records
    Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create'); //Dispalys the create form
    Route::get('/groups/{groups}', [GroupController::class, 'show'])->name('groups.show'); //Displays an indevidual record
    Route::get('/groups/{groups}/edit', [GroupController::class, 'edit'])->name('groups.edit'); //Displays the edit form
    Route::put('/groups/{groups}/update', [GroupController::class, 'update'])->name('groups.update'); //Updates a record in the database
    Route::post('/groups', [GroupController::class, 'store'])->name('groups.store'); //Adds a record to the database
    Route::delete('/groups/{groups}', [GroupController::class, 'destroy'])->name('groups.destroy'); //Delets a record from the database
});

require __DIR__.'/auth.php';
