<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'                 => 'required|string|max:255',
            'email'                => 'nullable|email',
            'phoneNumber'          => 'required|numeric',
            'requested_procedures' => 'required|string',
            'appointment_date'     => 'required|date',
            'attachments'          => 'nullable|file|mimes:pdf,jpg,jpeg,png',
            'message'              => 'nullable|string',
        ];
    }
}
