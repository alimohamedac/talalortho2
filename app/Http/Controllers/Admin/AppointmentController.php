<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Support\Facades\Storage;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();

        return view('admin.appointments.index', compact('appointments'));
    }

    public function download(Appointment $appointment)
    {
        if ($appointment->attachments && Storage::exists($appointment->attachments)) {
            return Storage::download($appointment->attachments);
        }

        return redirect()->back()->with('error', 'File not found.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('admin.appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
