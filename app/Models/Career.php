<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use AttachmentStatus;

    protected $fillable = [
        'title',
        'attachment_url',
        'apply_link',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
