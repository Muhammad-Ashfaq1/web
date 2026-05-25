<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Procurement extends Model
{
    use AttachmentStatus;

    protected $fillable = [
        'title',
        'slug',
        'type',
        'posted_by',
        'updated_by',
        'is_active',

    ];

    protected static function booted()
    {
        static::creating(function ($procurement) {
            if (empty($procurement->slug) && ! empty($procurement->title)) {
                $procurement->slug = Str::slug($procurement->title);
            }
        });

        static::updating(function ($procurement) {
            if ($procurement->isDirty('title') && ! empty($procurement->title)) {
                $procurement->slug = Str::slug($procurement->title);
            }
        });
    }

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
