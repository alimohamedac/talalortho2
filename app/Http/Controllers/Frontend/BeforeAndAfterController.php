<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BeforeAndAfter;

class BeforeAndAfterController extends Controller
{
    public function __invoke()
    {
        $items = BeforeAndAfter::all();

        return view('frontend.pages.before-after', compact('items'));
    }
}
