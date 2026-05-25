<?php

namespace App\Http\Controllers;

use App\Helpers\FileUploadManager;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'education' => 'required|string|max:255',
            'experience' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('resume')) {
            $resumeFile = FileUploadManager::uploadFile($request->file('resume'), 'uploads/volunteers/resumes/');
            $validated['resume_url'] = $resumeFile['path'];        }

        if ($request->hasFile('photo')) {
            $photoFile = FileUploadManager::uploadFile($request->file('photo'), 'uploads/volunteers/photos/');
            $validated['photo_url'] = $photoFile['path'];
        }

        Volunteer::create($validated);

        return redirect()->back()->with('success', 'Thank you for registering as a volunteer. We will contact you soon!');
    }
}
