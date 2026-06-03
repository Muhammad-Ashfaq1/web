<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasRichTextDescription
{
    /**
     * Get the plain text version of the description.
     *
     * @return string
     */
    public function getDescriptionPlainTextAttribute()
    {
        return $this->description ? strip_tags($this->description) : '';
    }

    /**
     * Get the character count of the plain text description.
     *
     * @return int
     */
    public function getDescriptionCharCountAttribute()
    {
        return strlen($this->description_plain_text);
    }

    /**
     * Get a truncated version of the description.
     *
     * @param  int  $limit
     * @return string
     */
    public function getTruncatedDescription($limit = 100)
    {
        if (! $this->description) {
            return '';
        }

        $plainText = strip_tags($this->description);
        if (strlen($plainText) <= $limit) {
            return $this->description;
        }

        return Str::limit($this->description, $limit);
    }

    /**
     * Check if the description is long and needs truncation.
     *
     * @param  int  $limit
     * @return bool
     */
    public function hasLongDescription($limit = 100)
    {
        return strlen($this->description_plain_text) > $limit;
    }

    /**
     * Get the formatted description for display.
     *
     * @return string
     */
    public function getFormattedDescriptionAttribute()
    {
        return $this->description ?: 'N/A';
    }

    /**
     * Get truncated plain text for table display.
     *
     * @param  int  $limit
     * @return string
     */
    public function getDescriptionPreview($limit = 100)
    {
        if (! $this->description) {
            return 'N/A';
        }

        $plainText = strip_tags($this->description);

        if (strlen($plainText) <= $limit) {
            return $this->description; // Return full HTML for short content
        }

        return Str::limit($plainText, $limit); // Return truncated plain text for long content
    }

    /**
     * Check if description needs "View More" functionality.
     *
     * @param  int  $limit
     * @return bool
     */
    public function needsViewMore($limit = 100)
    {
        return $this->description && strlen(strip_tags($this->description)) > $limit;
    }

    /**
     * Get base64 encoded description for data attributes.
     *
     * @return string
     */
    public function getDescriptionBase64Attribute()
    {
        return $this->description ? base64_encode($this->description) : '';
    }
}
