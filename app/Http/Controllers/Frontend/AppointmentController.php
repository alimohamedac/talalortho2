<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function __invoke(AppointmentRequest $request)
    {
        if ($request->hasFile('attachments')) {
            $request['attachments'] = $request->file('attachments')->store('attachments');
        }

        $appointment = Appointment::create($request->validated());

        return redirect()->route('pages.appointment')->with('success', 'Appointment booked successfully.');
    }
}
