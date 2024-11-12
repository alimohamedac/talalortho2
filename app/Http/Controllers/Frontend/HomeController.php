<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BeforeAndAfter;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $items = News::whereNull('deleted_at')->orderByDesc('created_at')->take(3)->get();
        $beforeAndAfter = BeforeAndAfter::whereNull('deleted_at')->orderByDesc('created_at')->first();

        return view('frontend.home', compact('items', 'beforeAndAfter'));
    }
}
