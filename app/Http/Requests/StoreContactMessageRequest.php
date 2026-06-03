<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactMessageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20|min:10',
            'subject' => 'required|string|max:255|min:5',
            'message' => 'required|string|min:10|max:2000',
            'type' => 'required|in:query,complaint,bin_request',
            'complaint_category_id' => 'nullable|exists:complaint_categories,id|required_if:type,complaint',
        ];
    }
}
