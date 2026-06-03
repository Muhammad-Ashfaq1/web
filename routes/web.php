<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/statistics', [HomeController::class, 'getStatistics'])->name('statistics');

Route::controller(ContactController::class)->group(function () {
    Route::get('Contact-Us', 'index')->name('contact.index');
    Route::get('request-bin', 'binRequest')->name('contact.bin-request');
    Route::get('file-complaint', 'complaint')->name('contact.complaint');
    Route::post('Contact-Us', 'store')->name('contact.store');
    Route::post('newsletter/subscribe', 'subscribe')->name('newsletter.subscribe');
});

Route::get('company-profile', [CompanyProfileController::class, 'show'])->name('company-profile');
Route::view('About-Suthra-Punjab', 'suthra-punjab')->name('suthra-punjab');

Route::get('register-volunteer', fn () => view('register-volunteer'))->name('volunteer.register');
Route::post('register-volunteer', [VolunteerController::class, 'store'])->name('volunteer.store');
Route::get('membership', [WebsiteController::class, 'memberships'])->name('membership');
Route::get('team-lwmc', [WebsiteController::class, 'teamLwmc'])->name('team-lwmc');
Route::get('departments', [WebsiteController::class, 'departments'])->name('departments');
Route::get('department/{id}', [WebsiteController::class, 'departmentEmployees'])->name('department.employees');

Route::view('HR-Department', 'hr-dep')->name('departments.hr');
Route::view('MIS-Department', 'mis-dep')->name('departments.mis');
Route::view('Planning-Department', 'planning-dep')->name('departments.planning');
Route::view('Communication-Department', 'communication-dep')->name('departments.communication');
Route::view('Finance-Department', 'finance-dep')->name('departments.finance');
Route::view('Operations-Department', 'operations-dep')->name('departments.operations');
Route::view('Legal-Department', 'legal-dep')->name('departments.legal');
Route::view('Procurement-Department', 'procurement-dep')->name('departments.procurement');
Route::view('Audit-Department', 'audit-dep')->name('departments.audit');

Route::get('Board-of-Directors', [WebsiteController::class, 'boardMembers'])->name('board-members');
Route::view('LWMC-Organogram', 'organogram')->name('organogram');
Route::get('Right-to-Information', [WebsiteController::class, 'rightToInformation'])->name('rightinfo');
Route::get('WMC-PMU-Summary', [WebsiteController::class, 'wmcPmuSummaries'])->name('wmc-pmu-summaries');
Route::get('LWMC-Careers', [WebsiteController::class, 'careers'])->name('careers');

Route::get('Bid-Documents', [WebsiteController::class, 'biddingDocuments'])->name('procurements.bidding');
Route::get('procurements/{type}', [WebsiteController::class, 'showByType'])->name('procurements.nav');

Route::get('Gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::view('Video-Gallery', 'video-gallery')->name('video-gallery');
Route::view('brochures', 'Brocher')->name('brochures');
Route::get('services/{operation}', [WebsiteController::class, 'serviceDetails'])->name('services.show');
Route::view('Waste-Collection', 'waste-collection')->name('waste-collection');
