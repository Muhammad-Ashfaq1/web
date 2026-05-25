<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use App\Models\Traits\HasRichTextDescription;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use AttachmentStatus, HasFactory, HasRichTextDescription;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'logo_url',
        'website_url',
        'is_active',
        'display_order',
        'description',
        'user_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get the user that created the client.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include active clients.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order by display_order.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order');
    }

    // The following methods are now provided by HasRichTextDescription trait:
    // - getDescriptionPlainTextAttribute()
    // - getDescriptionCharCountAttribute()
    // - getTruncatedDescription()
    // - hasLongDescription()
    // - getFormattedDescriptionAttribute()
    // - getDescriptionPreview()
    // - needsViewMore()
    // - getDescriptionBase64Attribute()
}
