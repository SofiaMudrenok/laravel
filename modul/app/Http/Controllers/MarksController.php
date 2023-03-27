<?php

namespace App\Http\Controllers;

use App\Models\Mark;

class MarksController extends Controller
{
    public function index()
    {
        $marks = Mark::all();
        return view ('marks')->with('mark',$marks);
    }

    public function create()
    {
        return view('marks.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Mark::create($input);
        return redirect('marks')->with('flash_message', 'Mark added');
    }

    public function show(string $date)
    {
        $mark = Mark::find($date);
        return view('marks.show')->with('marks', $mark);
    }

}
