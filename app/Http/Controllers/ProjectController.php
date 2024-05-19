<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects', [
            "posts" => Project::all(),
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "post" => Project::find($slug),
        ]);
    }
}
