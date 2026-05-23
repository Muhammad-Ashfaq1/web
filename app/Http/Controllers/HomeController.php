<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = HomeSlider::where('is_active', operator: HomeSlider::ACTIVE_STATUS)
            ->where('type', HomeSlider::SLIDER_TYPE)
            ->latest('updated_at')
            ->get();

        $promotions = HomeSlider::where('is_active', operator: HomeSlider::ACTIVE_STATUS)
            ->where('type', HomeSlider::BANNER_TYPE)
            ->latest('updated_at')
            ->get();

        return view('welcome', compact('sliders', 'promotions'));
    }
}
