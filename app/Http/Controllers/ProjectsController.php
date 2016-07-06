<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use Gate;

class ProjectsController extends Controller
{
	function __construct()
	{
		$this->middleware('auth');
	}

    public function view(Project $project)
    {
    	if (Gate::denies('show-project', $project)) {
    		abort(403, 'Sorry you don\'t have permissions to read that.');
    	}

    	return view('projects.view', compact('project'));
    }
}
