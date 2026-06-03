<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\CeoMessage;
use App\Models\ContactMessage;
use App\Models\HomeSlider;
use App\Models\NewsAlert;
use App\Models\SwmOperations;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = HomeSlider::where('is_active', HomeSlider::ACTIVE_STATUS)
            ->where('type', HomeSlider::SLIDER_TYPE)
            ->latest('updated_at')
            ->get();

        $promotions = HomeSlider::where('is_active', HomeSlider::ACTIVE_STATUS)
            ->where('type', HomeSlider::BANNER_TYPE)
            ->latest('updated_at')
            ->get();

        $ceo_message = CeoMessage::where('is_active', CeoMessage::ACTIVE_STATUS)
            ->latest('updated_at')
            ->first();

        $news_alerts = NewsAlert::active()->latest('updated_at')->take(5)->get();
        $about_sections = AboutSection::active()
            ->orderBy('id')
            ->get();
        $about_section = $about_sections->first();
        $swm_operations = SwmOperations::active()
            ->featured()
            ->latest('updated_at')
            ->take(6)
            ->get();
        $statistics = $this->buildStatistics();

        return view('welcome', compact(
            'sliders',
            'promotions',
            'ceo_message',
            'news_alerts',
            'about_section',
            'about_sections',
            'swm_operations',
            'statistics'
        ));
    }

    public function getStatistics(): JsonResponse
    {
        return response()->json($this->buildStatistics());
    }

    private function buildStatistics(): array
    {
        $resolvedComplaints = ContactMessage::where('type', ContactMessage::TYPE_COMPLAINT)
            ->where('is_read', true)
            ->count();

        return [
            'today_complaints' => ContactMessage::whereDate('created_at', Carbon::today())
                ->where('type', ContactMessage::TYPE_COMPLAINT)
                ->count(),
            'total_complaints' => ContactMessage::where('type', ContactMessage::TYPE_COMPLAINT)->count(),
            'total_queries' => ContactMessage::where('type', ContactMessage::TYPE_QUERY)->count(),
            'total_bin_requests' => ContactMessage::where('type', ContactMessage::TYPE_BIN_REQUEST)->count(),
            'total_messages' => ContactMessage::count(),
            'unread_messages' => ContactMessage::where('is_read', false)->count(),
            'resolved_complaints' => $resolvedComplaints,
            'total_waste_processed' => 200000 + ($resolvedComplaints * 1000),
        ];
    }
}
