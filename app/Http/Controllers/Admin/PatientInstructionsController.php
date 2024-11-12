<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientInstructionRequest;
use App\Models\PatientInstruction;
use Illuminate\Support\Facades\Storage;

class PatientInstructionsController extends Controller
{
    public function index()
    {
        $instructions = PatientInstruction::all();

        return view('admin.patientInstructions.index', compact('instructions'));
    }

    public function store(PatientInstructionRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('instructions', 'public');
        }

        PatientInstruction::create($data);

        return redirect()->route('patient_instructions.index')
            ->with('success', 'Patient instruction created successfully.');
    }

    public function update(PatientInstructionRequest $request, PatientInstruction $patientInstruction)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($patientInstruction->image) {
                Storage::disk('public')->delete($patientInstruction->image);
            }
            $data['image'] = $request->file('image')->store('instructions', 'public');
        }

        $patientInstruction->update($data);

        return redirect()->route('patient_instructions.index')
            ->with('success', 'Patient instruction updated successfully.');
    }

    public function destroy(PatientInstruction $patientInstruction)
    {
        if ($patientInstruction->image) {
            Storage::disk('public')->delete($patientInstruction->image);
        }

        $patientInstruction->delete();

        return redirect()->route('patient_instructions.index')
            ->with('success', 'Patient instruction deleted successfully.');
    }
}
