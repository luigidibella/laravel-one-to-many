@php
    use App\Functions\Helper;
@endphp

@extends('layouts.admin')

@section('content')
    <div class="bg-white w-50 rounded-3 p-3">
        <h2>{{ $project->title }}</h2>

        @if ($project->type)
        <h6>Categoria: <span class="badge text-bg-warning">{{ $project->type->name }}</span></h6>
        @endif

        <img
            class="img-fluid w-75"
            alt="{{ $project->title }}"
            src="{{ asset('storage/' . $project->image )}}"
            onerror="this.src='/img/no-image.webp'"
        >
        <p>{{ $project->image_original_name }}</p>

        <h6>Descrizione:</h6>
        <p>{{ $project->text }}</p>

        <h6 class="text-end">{{Helper::formatDate($project->updated_at)}}</h6>
    </div>

@endsection

