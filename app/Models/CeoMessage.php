<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;

class CeoMessage extends Model
{
    use AttachmentStatus;

    protected $table = 'ceo_messages';

    protected $fillable = [
        'ceo_name',
        'ceo_message',
        'image_url',
        'video_url',
        'year_of_excellence',
        'is_active',
    ];

    /**
     * YouTube URL suitable for lightbox / direct playback.
     */
    public function getEmbedVideoUrlAttribute(): ?string
    {
        $url = $this->video_url;

        if (! $url) {
            return null;
        }

        if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/'.$matches[1];
        }

        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return 'https://youtu.be/'.$matches[1];
        }

        if (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/'.$matches[1];
        }

        return $url;
    }
}
