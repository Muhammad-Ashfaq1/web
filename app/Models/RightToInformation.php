<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RightToInformation extends Model
{
    use AttachmentStatus, HasFactory;

    protected $fillable = [
        'name',
        'designation_id',
        'email',
        'phone',
        'address',
        'is_active',
    ];

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
}
