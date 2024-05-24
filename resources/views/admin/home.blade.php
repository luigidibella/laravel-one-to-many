@extends('layouts.admin')

@section('content')

<h1 class="text-white">Home della dashboard</h1>

<h2>Sono presenti <span class="text-white">{{ $count_projects}}</span> progetti.</h2>

<h2>Ultimo progetto:</h2>
<div class="p-2 rounded-3 bg-success-subtle">
    <h3>{{ $last_project->title }}</h3>
    <p>{{ $last_project->text }}</p>
</div>

<h2></h2>
@endsection
