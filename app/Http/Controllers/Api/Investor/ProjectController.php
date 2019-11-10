<?php

namespace App\Http\Controllers\Api\Investor;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    public function index()
    {
    	$projects = Project::all();
    	return ProjectResource::collection($projects);
    }
}
