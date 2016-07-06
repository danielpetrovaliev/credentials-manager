@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6   col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
			<div class="row text-center">
				<h1>{{ $project->name }}</h1>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					{!! Html::image('uploads/images/'.$project->photo, $project->name, ['class' => 'col-xs-12 col-sm-12 col-md-12 col-lg-12']) !!}
				</div>
			</div>

			<div class="row">
				<div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
					{!! $project->description !!}
				</div>
			</div>
		</div>
	</div>
@stop