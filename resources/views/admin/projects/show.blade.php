@extends('layouts.admin')

@section('content')
    <div class="bg-white w-50 rounded-3 p-3">
        <h2>{{ $project->title }}</h2>

        @if ($project->type)
            <p>Categoria: <span class="badge text-bg-warning">{{ $project->type->name }}</span></p>
        @endif

        <h6>Descrizione:</h6>
        <p>{{ $project->text }}</p>
    </div>

@endsection

