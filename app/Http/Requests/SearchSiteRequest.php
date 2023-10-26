<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchSiteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'url' => 'required_without:name|string',
            'name' => 'required_without:url|string',
        ];
    }
}
