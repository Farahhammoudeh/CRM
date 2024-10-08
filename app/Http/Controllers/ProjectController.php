<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Mail\ProjectCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->paginate(6);

        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $project = Project::create([
            'client_id' =>1,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        Mail::to($project->client->user)->queue(
            new ProjectCreated($project)
        );

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', ['project' =>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', ['project' =>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update([
            'client_id' => 1,
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('/projects/' . $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        
        return redirect('/projects');
    }
}
