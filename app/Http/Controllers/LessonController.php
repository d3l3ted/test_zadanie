<?php

namespace App\Http\Controllers;

use App\lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index($id){
        $lesson = lesson::findOrFail($id);
        return view('lesson', [
            'lesson' => $lesson,
            ]);
    }
}
