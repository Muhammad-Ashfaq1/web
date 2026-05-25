<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use AttachmentStatus, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'joining_date',
        'image_url',
        'designation_id',
        'department_id',
        'employment_status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'joining_date' => 'date',
    ];

    const EMPLOYMENT_STATUS_ACTIVE = 'active';

    const EMPLOYMENT_STATUS_INACTIVE = 'inactive';

    const EMPLOYMENT_STATUS_TERMINATED = 'terminated';

    const EMPLOYMENT_STATUS_RESIGNED = 'resigned';

    const EMPLOYMENT_STATUS_CONINGENCY = 'contingency';

    const EMPLOYMENT_STATUS_CONTRACT = 'contract';

    /**
     * Get the department that the employee belongs to.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the designation of the employee.
     */
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    /**
     * Get the formatted joining date attribute.
     *
     * @return string
     */
    public function getFormattedJoiningDateAttribute()
    {
        return $this->joining_date ? Carbon::parse($this->joining_date)->format('M d, Y') : null;
    }

    /**
     * Get the status badge HTML attribute.
     *
     * @return string
     */
    public function getStatusBadgeAttribute()
    {
        $statusClasses = [
            'active' => 'bg-success',
            'inactive' => 'bg-warning',
            'terminated' => 'bg-danger',
            'resigned' => 'bg-info',
            'contingency' => 'bg-secondary',
            'contract' => 'bg-primary',
        ];

        $class = $statusClasses[$this->employment_status] ?? 'bg-secondary';
        $status = ucfirst($this->employment_status);

        return '<span class="badge '.$class.'">'.$status.'</span>';
    }

    /**
     * Check if the employee is active.
     */
    public function isActive()
    {
        return $this->employment_status === 'active';
    }

    /**
     * Scope a query to only include active employees.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('employment_status', 'active');
    }
}
