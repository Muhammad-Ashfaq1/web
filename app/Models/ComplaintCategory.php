<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;

class ComplaintCategory extends Model
{
    use AttachmentStatus;

    protected $table = 'complaint_categories';

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
