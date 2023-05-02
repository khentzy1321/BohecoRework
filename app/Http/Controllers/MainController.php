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
        $interruptions = Interruption::all();
        $news = News::get();
        $countInt = Interruption::count();
        $countAdv = Advisory::count();
        $countNews = News::count();

        $interruptions = Interruption::paginate(9);
        $advisories = Advisory::paginate(3);
        $news = News::paginate(2);

        return view('site',
         compact('advisories'
         ,'interruptions',
          'news',
          'countInt',
          'countAdv',
          'countNews'
        ));
    }
}
