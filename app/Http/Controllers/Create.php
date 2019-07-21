<?php

namespace App\Http\Controllers;

use App\lesson;
use Illuminate\Http\Request;

class Create extends Controller
{

    protected function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:60',
            'description' => 'required|min:50|max:2000',
            'user' => 'required',
        ]);
        $path = $request->file('imgupl')->store('lesson_images');
        $path2 = $request->file('vidupl')->store('lesson_videos');
        $lesson = new lesson();
        $lesson->name = $request['name'];
        $lesson->description = $request['description'];
        $lesson->user_id = $request['user'];
        $lesson->image = $path;
        $lesson->video = $path2;
        $lesson->save();
        return redirect('/home');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        return view('create');
    }
}
