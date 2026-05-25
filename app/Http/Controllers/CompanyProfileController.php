<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\SwmOperations;

class CompanyProfileController extends Controller
{
    public function show()
    {
        $companyProfile = CompanyProfile::active()
            ->latest('updated_at')
            ->first();

        $featuredActive = SwmOperations::active()
            ->featured()
            ->latest('updated_at')
            ->get();

        $featureUnActive = SwmOperations::active()
            ->notFeatured()
            ->latest('updated_at')
            ->get();

        return view('company-profile', compact('companyProfile', 'featuredActive', 'featureUnActive'));
    }
}
