<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = config('projects');
        return view('projects.index', compact('projects'));
    }

    public function show(string $slug)
    {
        $projects = config('projects');

        $project = collect($projects)->firstWhere('slug', $slug);

        abort_if(!$project, 404);

        return view('projects.show', compact('project'));
    }
}
