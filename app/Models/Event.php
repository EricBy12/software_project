<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    use HasFactory;
    protected $fillable = ['title', 'description', 'tag', 'location', 'time', 'attendance_restriction', 'attendees', 'organiser_id']; // Ensure this matches your database columns

}
