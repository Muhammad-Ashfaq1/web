<?php

namespace App\Models;

use App\Models\Enums\ProcurementEnums;
use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProcurementAttachment extends Model
{
    use AttachmentStatus;

    protected $table = 'procurement_attachments';

    protected $fillable = [
        // Common
        'type',
        'title',
        'is_active',

        // Bidding Document fields
        'attachment_url',
        'last_date',

        // Past Procurement fields
        'tender_title',
        'tender_name',
        'procurement_type',
        'publish_date',
        'close_date',
        'department_id',
        'tender_notice',
        'table_handing',
        'procurement_title',
        'procurement_name',

        // Evaluation Report fields
        'first_lowest_firm_name',
        'evaluation_report_attachment',

        // Eid ul Azha Procurements
        'purchase_order',

        // Blacklisted Firm fields
        'firm_name',
        'blacklist_reason',
        'blacklist_type',
        'blacklist_date',
        'blacklist_end_date',
        'blacklist_remarks',
        'blacklist_order_attachment',
    ];

    protected $casts = [
        'type' => ProcurementEnums::class,
        'last_date' => 'date',
        'publish_date' => 'date',
        'close_date' => 'date',
        'blacklist_date' => 'date',
        'blacklist_end_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class);
    }

    // Accessors for attachment URLs
    public function getTenderNoticeUrlAttribute()
    {
        return $this->getImageUrl($this->getRawOriginal('tender_notice'));
    }

    public function getTableHandingUrlAttribute()
    {
        return $this->getImageUrl($this->getRawOriginal('table_handing'));
    }

    public function getEvaluationReportAttachmentUrlAttribute()
    {
        return $this->getImageUrl($this->getRawOriginal('evaluation_report_attachment'));
    }

    public function getPurchaseOrderUrlAttribute()
    {
        return $this->getImageUrl($this->getRawOriginal('purchase_order'));
    }

    public function getBlacklistOrderAttachmentUrlAttribute()
    {
        return $this->getImageUrl($this->getRawOriginal('blacklist_order_attachment'));
    }

    /**
     * Get all attachment file paths for deletion
     */
    public function getAttachmentFilePaths(): array
    {
        $paths = [];

        $attachmentFields = [
            'attachment_url',
            'tender_notice',
            'table_handing',
            'evaluation_report_attachment',
            'purchase_order',
            'blacklist_order_attachment',
        ];

        foreach ($attachmentFields as $field) {
            if ($this->getRawOriginal($field)) {
                $paths[] = $this->getRawOriginal($field);
            }
        }

        return $paths;
    }

    /**
     * Get display title based on type
     */
    public function getDisplayTitleAttribute()
    {
        return match ($this->type) {
            ProcurementEnums::BIDDING_DOCUMENT => $this->title,
            ProcurementEnums::PAST_PROCUREMENT => $this->tender_title,
            ProcurementEnums::CURRENT_PROCUREMENT => $this->procurement_title,
            ProcurementEnums::EID_UL_AZHA_PROCUREMENT => $this->procurement_name,
            ProcurementEnums::EVALUATION_REPORT => $this->procurement_name,
            ProcurementEnums::BLACKLISTED_FIRMS => $this->firm_name,
            default => $this->title ?? 'N/A'
        };
    }
}
