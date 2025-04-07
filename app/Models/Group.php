<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    //use HasFactory;
    
    protected $fillable = ['title','description', 'members', 'attendance_restriction', 'privateStats'];

    public function users() {
        // return $this->hasMany(User::class);
        return $this->belongsToMany(User::class)->withPivot('id');
    }
}
