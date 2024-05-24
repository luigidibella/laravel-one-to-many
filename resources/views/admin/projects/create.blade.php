@extends('layouts.admin')

@section('content')

    <h2 class="text-white">Aggiungi Progetto</h2>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-6">

            @php
                $status = 'prod';
                $title = '';
                $text = '';
                if($status == 'test'){
                    $title = 'test';
                    $text = 'test';
                }
            @endphp

            <form action="{{ route('admin.projects.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo (*)</label>
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}">
                    @error('title')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="text" class="form-label">Descrizione (*)</label>
                    <textarea name="text" class="form-control @error('text') is-invalid @enderror" id="text">{{ old('text') }}</textarea>
                    @error('text')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                {{-- <div class="mb-3">
                    <label for="technology" class="form-label">Tecnologia (*)</label>
                    <input name="technology" type="text" class="form-control @error('technology') is-invalid @enderror" id="technology" value="{{ old('technology') }}">
                    @error('technology')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div> --}}

                {{-- <div class="mb-3">
                    <label for="type" class="form-label">Tipo (*)</label>
                    <input name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type" value="{{ old('type') }}">
                    @error('type')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div> --}}

                <button class="btn btn-success" type="submit">Invia nuovo progetto</button>
                <button class="btn btn-danger" type="reset">Reset</button>

            </form>
        </div>
    </div>
@endsection
