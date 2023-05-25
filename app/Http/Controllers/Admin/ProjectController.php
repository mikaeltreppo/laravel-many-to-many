<?php

namespace App\Http\Controllers\admin;

use App\Models\Technology;
use Illuminate\Support\Str;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //finita
    {
        $types = Type::all();
        $project = Project::all();
        return view('admin.projects.index', compact('project', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //finita
    {
        $technologies = Technology::all();
        $types = Type::all();
        return view('admin.projects.create', compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //finito
    {


        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);



        $form_data = $request->all();
        $newProject = new Project();
        $newProject->title = $form_data['title'];
        $newProject->description = $form_data['description'];
        $newProject->slug = Str::slug($form_data['title']);
        $newProject->type_id = $form_data['type_id'];
        $newProject->author = $form_data['author'];
        $newProject->save();

        if ($request->has('technologies')) {
            $newProject->technologies()->attach($request->technologies);
        }
        



        return redirect()->route('admin.projects.show', ['project' => $newProject->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //finita
    {
        $types = Type::all();
        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project', 'types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //finita
    {
        $technologies=Technology::all();
        $types = Type::all();
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project', 'types','technologies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //finito
    {

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);
        
        $project = Project::findOrFail($id);
        $form_data = $request->all();
        $project->update($form_data);
        $project->technologies()-sync($request->technologies);

        return redirect()->route('admin.projects.show', ['project' => $project->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}