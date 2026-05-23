<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('company-profile','company-profile');
Route::view('register-volunteer','register-volunteer');
Route::view('membership','membership');
Route::view('team-lwmc','team-lwmc');
Route::view('HR-Department','hr-dep');
Route::view('MIS-Department','mis-dep');
Route::view('Planning-Department','planning-dep');
Route::view('Communication-Department','communication-dep');
Route::view('Finance-Department','finance-dep');
Route::view('Operations-Department','operations-dep');
Route::view('Legal-Department','legal-dep');
Route::view('Procurement-Department','procurement-dep');
Route::view('Audit-Department','audit-dep');
Route::view('Board-of-Directors','bods');
Route::view('LWMC-Organogram','organogram');
Route::view('Right-to-Information','rightinfo');
Route::view('WMC-PMU-Summary','pmu-summary');
Route::view('LWMC-Careers','career');
Route::view('Contact-Us','contact');
Route::view('Bid-Documents','bid-documents');
Route::view('About-Suthra-Punjab','suthra-punjab');
Route::view('Gallery','pictures');
Route::view('Video-Gallery','video-gallery');
Route::view('brochures','brocher');
Route::view('Waste-Collection','waste-collection');
