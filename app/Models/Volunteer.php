<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'education',
        'experience',
        'resume_url',
        'photo_url',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
