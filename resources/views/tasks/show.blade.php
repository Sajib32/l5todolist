@extends('layouts.master')

@section('content')
    <h2>
        {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
        {{ $task->name }}
  
 
    {{ $task->description }}
    </h2>
@endsection