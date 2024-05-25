@extends('layouts.admin')

@section('content')
    <h2 class="text-white">{{ $project->title }}</h2>

    <p>{{ $project->text }}</p>


@endsection

