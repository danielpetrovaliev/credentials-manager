<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;

class ProjectsController extends Controller
{
	function __construct()
	{
        $this->middleware('auth');	
	}

    public function view(Project $project)
    {
    	return view('projects.view', compact('project'));
    }
}
