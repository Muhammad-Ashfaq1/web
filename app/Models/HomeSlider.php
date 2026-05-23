<?php

namespace App\Models;

use App\Models\Traits\AttachmentStatus;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use AttachmentStatus;

    const SLIDER_TYPE = 'slider';

    const BANNER_TYPE = 'promotion';

    protected $table = 'home_sliders';
}
