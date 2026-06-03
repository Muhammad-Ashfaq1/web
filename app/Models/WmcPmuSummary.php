<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WmcPmuSummary extends Model
{
    use AttachmentStatus, HasFactory;

    protected $fillable = [
        'title',
        'date',
        'attachment_url',
        'posted_by',
        'user_id',
        'is_active',
    ];

    protected $casts = [
        'date' => 'date',
        'is_active' => 'boolean',
    ];

    /**
     * Get the user that posted this summary.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
