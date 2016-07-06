@extends('panelViews::mainTemplate')
@section('page-wrapper')

<h1>{{ $user->name }}</h1>

	{{-- {!! Form::open(array('url' => 'panel/Project/update', 'method' => 'put')) !!}

	{!! Form::close() !!} --}}

	<div class="col-md-6">
		{!! Form::open(['method' => 'POST', 'url' => '/panel/UserProject/update', 'class' => 'form-horizontal']) !!}
		
		    <div class="form-group{{ $errors->has('projects') ? ' has-error' : '' }}">
		        {!! Form::label('projects', 'Projects') !!}
		        {!! Form::select('projects[]', $projects, $user->projects->lists('id')->all(), ['id' => 'projects', 'class' => 'form-control', 'required' => 'required', 'multiple']) !!}
		        <small class="text-danger">{{ $errors->first('projects') }}</small>
		    </div>
		
			{!! Form::hidden('user_id', $user->id, []) !!}

		    <div class="btn-group pull-right">
		        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
		        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
		    </div>
		
		{!! Form::close() !!}
	</div>
@stop
