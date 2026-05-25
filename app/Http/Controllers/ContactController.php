<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ComplaintCategory;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->get('type', 'query');

        if (! in_array($type, ['query', 'complaint', 'bin_request'], true)) {
            $type = 'query';
        }

        $complaintCategories = ComplaintCategory::where('is_active', ComplaintCategory::ACTIVE_STATUS)->latest()->get();
        $contactTypes = ContactMessage::getTypes();
        $pageContent = $this->getPageContent($type);

        return view('contact', compact('complaintCategories', 'contactTypes', 'type', 'pageContent'));
    }

    public function complaint()
    {
        return $this->index(request()->merge(['type' => 'complaint']));
    }

    public function binRequest()
    {
        return $this->index(request()->merge(['type' => 'bin_request']));
    }

    public function subscribe(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        try {
            ContactMessage::create([
                'name' => 'Newsletter Subscriber',
                'email' => $validatedData['email'],
                'phone' => 'N/A',
                'subject' => 'Newsletter Subscription',
                'message' => 'User subscribed to newsletter via website form.',
                'type' => ContactMessage::TYPE_QUERY,
            ]);

            return redirect()->back()->with('success', $this->getSuccessMessage('newsletter'));
        } catch (\Exception $e) {
            Log::error('Error storing newsletter subscription', [
                'error' => $e->getMessage(),
                'email' => $validatedData['email'],
            ]);

            return redirect()->back()->with('error', 'Sorry, there was an error processing your subscription. Please try again.');
        }
    }

    public function store(StoreContactMessageRequest $request)
    {
        try {
            $validatedData = $request->validated();

            if (ContactMessage::create($validatedData)) {
                return redirect()->back()->with('success', $this->getSuccessMessage($validatedData['type']));
            }

            return redirect()->back()->with('error', 'Sorry, there was an error sending your message. Please try again.');
        } catch (\Exception $e) {
            Log::error('Error storing contact message', [
                'error' => $e->getMessage(),
                'request_data' => $request->validated(),
            ]);

            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again.')
                ->withInput();
        }
    }

    private function getPageContent(string $type): array
    {
        $content = [
            'query' => [
                'title' => 'Contact Us',
                'subtitle' => 'General Inquiry',
                'description' => 'Have a question or need information? We\'re here to help. Send us your query and our team will get back to you as soon as possible.',
                'form_title' => 'Send Your Query',
                'submit_text' => 'Send Query',
            ],
            'complaint' => [
                'title' => 'File a Complaint',
                'subtitle' => 'Report an Issue',
                'description' => 'We take your concerns seriously. Please provide details about your complaint so we can address it promptly and effectively.',
                'form_title' => 'Submit Your Complaint',
                'submit_text' => 'Submit Complaint',
            ],
            'bin_request' => [
                'title' => 'Request a Bin',
                'subtitle' => 'Waste Management Service',
                'description' => 'Need a waste bin for your area? Submit your request below with your location details and we\'ll arrange for bin placement.',
                'form_title' => 'Request Waste Bin',
                'submit_text' => 'Submit Request',
            ],
        ];

        return $content[$type] ?? $content['query'];
    }

    private function getSuccessMessage(string $type): string
    {
        $messages = [
            'query' => 'Thank you for your query! We will get back to you soon.',
            'complaint' => 'Your complaint has been submitted successfully. We will investigate and respond promptly.',
            'bin_request' => 'Your bin request has been submitted. Our team will contact you regarding placement.',
            'newsletter' => 'Thank you for subscribing to our newsletter! You will receive updates soon.',
        ];

        return $messages[$type] ?? $messages['query'];
    }
}
