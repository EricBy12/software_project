<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    //use HasFactory;
    
    protected $fillable = ['title','description','location', 'members', 'groupAdmissions', 'privateStats', 'owner_id'];

    public function users() {
        // return $this->hasMany(User::class);
        return $this->belongsToMany(User::class)->withPivot('id');
    }

    // In Group model (App\Models\Group)
public function owner() //Chat GPT
{
    return $this->belongsTo(User::class, 'owner_id');  // 'owner_id' is the foreign key
}

}
