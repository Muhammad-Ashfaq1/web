<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactMessage extends Model
{
    const TYPE_QUERY = 'query';

    const TYPE_COMPLAINT = 'complaint';

    const TYPE_BIN_REQUEST = 'bin_request';

    protected $table = 'contact_messages';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'type',
        'complaint_category_id',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];

    public static function getTypes(): array
    {
        return [
            self::TYPE_QUERY => 'General Query',
            self::TYPE_COMPLAINT => 'Complaint',
            self::TYPE_BIN_REQUEST => 'Bin Request',
        ];
    }

    public function complaintCategory(): BelongsTo
    {
        return $this->belongsTo(ComplaintCategory::class);
    }
}
