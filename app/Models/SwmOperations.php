<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SwmOperations extends Model
{
    protected $table = 'swm_operations';

    protected $fillable = [
        'title',
        'description',
        'is_feature',
        'is_active',
    ];

    protected $casts = [
        'is_feature' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_feature', true);
    }

    public function scopeNotFeatured($query)
    {
        return $query->where('is_feature', false);
    }
}
