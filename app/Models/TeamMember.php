<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use AttachmentStatus;

    protected $fillable = [
        'name',
        'designation_id',
        'image_url',
        'is_active',
    ];

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
}
