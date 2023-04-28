<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advisory;
use App\Models\Interruption;
use App\Models\News;

class SiteController extends Controller
{
    public function index()
    {
        $advisories = Advisory::get();
        $interruptions = Interruption::get();
        $news = News::get();


        return view('site', compact('advisories','interruptions', 'news'));
    }
}
