<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('portfolio',compact('works'));
    }
    
    public function show(Work $work)
    {
        return view('cases',compact('work'));
    }
}
