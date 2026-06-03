<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use AttachmentStatus;

    protected $table = 'company_profiles';

    protected $fillable = [
        'title',
        'highlight_title',
        'description',
        'highlight_note',
        'image_one_url',
        'image_two_url',
        'background_image',
        'about_video_url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getAboutVideoUrlAttribute(): ?string
    {
        $original = $this->attributes['about_video_url'] ?? null;

        if (! $original) {
            return null;
        }

        if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $original, $matches)) {
            return 'https://www.youtube-nocookie.com/embed/'.$matches[1].'?rel=0&modestbranding=1';
        }

        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $original, $matches)) {
            return 'https://www.youtube-nocookie.com/embed/'.$matches[1].'?rel=0&modestbranding=1';
        }

        return $original;
    }
}
