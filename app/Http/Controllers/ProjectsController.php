<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{

    // Show All Projects

    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    // Go to Create Page

    public function create()
    {
        return view('projects.create');
    }

    // Show Selected Project's Details

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Edit Selected Project

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // Update Selected Project

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return view('projects.show', compact('project'));
    }

    // Delete Selected Project

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    // Create New Projects

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:2'],
            'description' => ['required', 'min:4']
        ]);

        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);

        return redirect('/projects');
    }
}
