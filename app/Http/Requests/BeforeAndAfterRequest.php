<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeforeAndAfterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ];
    }
}
