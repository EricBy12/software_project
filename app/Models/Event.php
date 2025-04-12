<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    use HasFactory;
    protected $fillable = ['title', 'description', 'tag', 'location', 'time', 'attendance_restriction', 'attendees', 'organizer_id']; // Ensure this matches your database columns

    public function users() {
        // return $this->hasMany(User::class);
        return $this->belongsToMany(User::class)->withPivot('id');
    }

        // In Group model (App\Models\Group)
    public function organizer() //ChatGPT.
    {
        return $this->belongsTo(User::class, 'organizer_id');  // 'organizer_id' is the foreign key
    }

}
