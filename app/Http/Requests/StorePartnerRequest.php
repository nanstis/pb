<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePartnerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user() != null;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'fax' => 'nullable|string',
            'address' => 'required|string',
            'zip' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slogan' => 'nullable|string|max:255',
            'summary' => 'required|string|max:255',
            'description' => 'required|string',
            'website' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'youtube' => 'nullable|string',
            'vimeo' => 'nullable|string',
        ];
    }
}
