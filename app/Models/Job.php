<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tags()
    {
        return $this->belongsTo(Employer::class);
    }
}
