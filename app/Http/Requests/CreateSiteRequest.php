<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSiteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'url' => 'required|string|min:3|unique:sites',
            'description' => 'required|string',
            'category' => 'required|array',
            'category.*' => 'exists:categories,name',
        ];
    }
}
