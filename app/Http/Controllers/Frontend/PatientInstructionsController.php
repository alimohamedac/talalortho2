<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PatientInstruction;

class PatientInstructionsController extends Controller
{
    public function __invoke()
    {
        $items = PatientInstruction::all();

        return view('frontend.pages.instructions', compact('items'));
    }
}
