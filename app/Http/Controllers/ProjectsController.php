<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            $projects = Project::where('user_id', Auth::user()->id)->get();
            return view('projects.index', ['projects' => $projects]);
        }

        return view('auth.login');
           
    }


    public function create()
    {
        return view('projects.create');
    }


    public function store(Request $request)
    {
        if(Auth::check()){
            $project = Project::create([
                'name'        => $request->input('name'),
                'description' => $request->input('description'),
                'user_id'     => Auth::user()->id
            ]);

            if($project){
                return redirect()->route('projects.show', ['projects' => $project->id])
                    ->with('success', 'Project created successfully');
            }
        }
        
        return back()->withInput()->with('errors', 'Error creating new project');
        
    }


    public function show(Project $project)
    {
        $project = Project::find($project->id);

        return view('projects.show', ['project' => $project]);
    }


    public function edit(Project $project)
    {
        $project = Project::find($project->id);

        return view('projects.edit', ['project' => $project]);
    }


    public function update(Request $request, Project $project)
    {
        $projectUpdate = Project::where('id', $project->id)->update([
            'name'        => $request->input('name'),
            'description' => $request->input('description')
        ]);

        if($projectUpdate){
            return redirect()->route('projects.show', ['project' => $project->id])
                ->with('success', 'Project updated successfuly');
        }

        return back()->withInput();
    }


    public function destroy(Project $project)
    {
        $projectDelete = Project::find($project->id);

        if($projectDelete->delete()){
            return redirect()->route('projects.index')
                ->with('success', 'Project deleted successfully');
        }

        return back()->withInput()->with('error', 'Project could not be deleted');
    }
}
