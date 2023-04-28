<?php

namespace App\Http\Controllers\More;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function index(){
        return view('more.leaders');
    }
}
