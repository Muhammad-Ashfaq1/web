<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class NewsAlert extends Model
{
    use AttachmentStatus;

    protected $table = 'news_alerts';

    protected $fillable = [
        'content',
        'alert_date',
        'image_url',
        'posted_by',
        'user_id',
        'is_active',
    ];

    protected $casts = [
        'alert_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getTitleAttribute(): string
    {
        return Str::limit($this->plainContent(), 70);
    }

    public function getDescriptionAttribute(): string
    {
        return $this->plainContent();
    }

    private function plainContent(): string
    {
        return trim(strip_tags((string) $this->content));
    }
}
