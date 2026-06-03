<?php

namespace App\Models\Traits;

trait AttachmentStatus
{
    const ACTIVE_STATUS = 1;

    const INACTIVE_STATUS = 0;

    public function scopeActive($query)
    {
        return $query->where('is_active', self::ACTIVE_STATUS);
    }

    public function scopeInactive($query)
    {
        return $query->where('is_active', self::ACTIVE_STATUS);
    }

    public function getImageUrlAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getAttachmentUrlAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function deleteImage()
    {
        $rawImageUrl = $this->getRawOriginal('image_url');

        if ($rawImageUrl && file_exists(public_path('storage/'.$rawImageUrl))) {
            unlink(public_path('storage/'.$rawImageUrl));
        }
    }

    public function deleteAttachment()
    {
        $rawAttachmentUrl = $this->getRawOriginal('attachment_url');

        if ($rawAttachmentUrl && file_exists(public_path('storage/'.$rawAttachmentUrl))) {
            unlink(public_path('storage/'.$rawAttachmentUrl));
        }
    }

    public function getImageOneUrlAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getImageTwoUrlAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getBackgroundImageAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    protected function getImageUrl($value)
    {
        return $value ? config('databank.admin_panel_storage_url').$value : null;
    }

    protected function getTenderNoticeAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    protected function getEvaluationReportAttachmentAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    protected function getPurchaseOrderAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    protected function getBlacklistOrderAttachmentAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getLogoUrlAttribute($value)
    {
        return $this->getImageUrl($value);
    }
}
