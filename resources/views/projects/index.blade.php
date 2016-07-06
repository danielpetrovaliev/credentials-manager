@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if (Auth::check())
            @forelse ($projects as $project)
                <a href="/projects/{{ $project->id }}">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>{{ $project->name }}</b></div>
                            <div class="panel-body">
                                {!! Html::image('uploads/images/'.$project->photo, $project->name, ['class' => 'col-md-12']) !!}
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <h1>You have no projects.</h1>
            @endforelse     
        @else
            <div class="col-md-10 col-md-offset-1">
                <h1>Please login to view your projects!</h1>
            </div>
        @endif

    </div>
</div>
@endsection
