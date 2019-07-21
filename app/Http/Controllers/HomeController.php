<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;

class HomeController extends Controller
{

    public function index()
    {
        $lessons = lesson::paginate(12);
        return view('home',compact('lessons'));
    }
}
