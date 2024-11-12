<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = News::all();

        return view('frontend.pages.news', compact('items'));
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

}
