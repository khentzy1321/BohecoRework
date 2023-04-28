<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advisory;
use App\Models\Interruption;
use App\Models\News;

class MainController extends Controller
{
    public function index()
    {
        $advisories = Advisory::get();
        $interruptions = Interruption::get();
        $news = News::get();

        $interruptions = Interruption::paginate(2);
        $advisories = Advisory::paginate(2);
        $news =News::paginate(2);

        return view('site', compact('advisories','interruptions', 'news'));
    }
}
