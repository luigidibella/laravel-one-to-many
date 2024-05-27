<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
Use App\Functions\Helper;
use App\Http\Requests\ProjectRequest;
use App\Models\Type;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(25);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view('admin.projects.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $form_data = $request->all();

        $new_project = new Project();

        $form_data['slug'] = Helper::generateSlug($form_data['title'], new Project());
        $new_project->fill($form_data);
        $new_project->save();

        /* dd($new_project); */

        return redirect()->route('admin.projects.index', $new_project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();

        return view('admin.projects.edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $form_data = $request->all();

        if($form_data['title'] == $project->title){
            $form_data['slug'] = $project->slug;
        }else{
            $form_data['slug'] = Helper::generateSlug($form_data['title'],new Project());
        }

        $project->update($form_data);

        return redirect()->route('admin.projects.index', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('deleted', 'Il progetto' . ' "' . $project->title . '" ' . 'è stato eliminato.');
    }
}
