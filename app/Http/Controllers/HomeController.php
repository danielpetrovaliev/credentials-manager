<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check()){

            $projects = \App\Project::whereHas('users', function ($q)
            {
                $q->where('users.id', \Auth::user()->id);
            })->get();

            return view('projects.index', compact('projects'));
        }

        return view('projects.index');
    }
}
