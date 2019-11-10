<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = DB::table('projects')->paginate(5);
        return view('admin.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'project_name' => ['required', 'string', 'max:10'],
            'farm_name' => ['required', 'string', 'max:10'],
            'project_start_date' => ['required', 'string', 'max:50'],
            'project_end_date' => ['required', 'string'],
            'investment' => ['required', 'string'],
            'location' => ['required', 'string'],
            'commodity' => ['required', 'string'],
            'rio' => ['required', 'string'],
            'collected_funds' => ['required', 'string'],
            'risk' => ['required', 'string'],
            'farm_description' => ['required', 'string'],
            'project_date' => ['required', 'string'],
            'project_manager_detail' => ['required', 'string'],
            'farm_owner' => ['required', 'string'],
            'project_image' => ['required','mimes:jpeg,jpg,png,gif','max:10000'],
            'owner_image' => ['required','mimes:jpeg,jpg,png,gif','max:10000'],
            'project_manager_image' => ['required','mimes:jpeg,jpg,png,gif','max:10000'],
            ])->validate();


    

        $project_image = $request->project_image;
        
      
        if ($request->file('project_image') ){
           
                $project_image_path = $request->file('project_image')->store('images/admin/project', 'public');
        }

        if ($request->file('owner_image') ){
           
                $owner_image_path = $request->file('owner_image')->store('images/admin/project', 'public');
        }

        if ($request->file('project_manager_image') ){
           
                $project_manager_image_path = $request->file('project_manager_image')->store('images/admin/project', 'public');
        }



        
        $project_id = Project::insertGetId($request->except('_token'));

        $project = Project::find($project_id);
        $project->project_image = $project_image_path;
        $project->owner_image = $owner_image_path;
        $project->project_manager_image = $project_manager_image_path;
        $project->save();

       
        return redirect()->route('project.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
