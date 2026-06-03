<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use AttachmentStatus;

    protected $fillable = [
        'name',
        'office_type',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Helper methods to check office type
    public function isHeadOffice()
    {
        return $this->office_type === 'head_office';
    }

    public function isBranchOffice()
    {
        return $this->office_type === 'branch_office';
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
