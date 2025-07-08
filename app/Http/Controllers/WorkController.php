<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::paginate(5);
        $tags = Tag::all();
        return view('portfolio',compact('works','tags'));
    }
    
    public function show(Work $work)
    {
        return view('cases',compact('work'));
    }
}
