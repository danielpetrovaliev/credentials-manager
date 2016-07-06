<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class UserProjectController extends CrudController{

    public function all($entity){
        parent::all($entity); 

		$this->filter = \DataFilter::source(new \App\User);
		$this->filter->add('name', 'Name', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('name', 'Name');
		$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
    	$user_id = request()->input('modify');

    	$user = \App\User::findOrFail($user_id);
    	$projects = \App\Project::lists('name', 'id');

        return view('users_projects_edit', compact('user', 'projects'));
    }    

    public function update()
    {
    	$projects_id = request()->input('projects');
    	$user_id = request()->input('user_id');

		$user = \App\User::findOrFail($user_id);

    	$user->projects()->sync($projects_id);

    	return back();
    }
}
