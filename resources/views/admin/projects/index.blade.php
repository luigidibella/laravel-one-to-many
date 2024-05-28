@php
    use App\Functions\Helper;
@endphp

@extends('layouts.admin')

@section('content')
    <h2 class="text-white">Elenco Progetti</h2>

    @if (session('deleted'))

    <div class="alert alert-success" role="alert">
        {{ session('deleted')}}
    </div>

    @endif

    <table class="table crud-table">
        <thead>
          <tr>
            <th scope="col" class="bg-success-subtle">n°</th>
            <th scope="col" class="bg-success-subtle">Titolo</th>
            <th scope="col" class="bg-success-subtle">Tipo</th>
            <th scope="col" class="bg-success-subtle">Immagine</th>
            <th scope="col" class="bg-success-subtle">Data</th>
            {{-- <th scope="col" class="bg-success-subtle">Descrizione</th> --}}
            <th scope="col" class="bg-success-subtle text-center">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item)
            <tr>
              <th scope="row">{{ $item->id }}</th>
              <td>
                {{ $item->title }}
                <hr>
                {{ $item->text }}
            </td>
              <td> {{ $item->type?->name }} </td>
              <td>
                <img class="thumb m-0" src="{{ asset('storage/' . $item->image ) }}" alt="" onerror="this.src='/img/no-image.webp'">
              </td>
              <td>{{ Helper::formatDate($item->update_at) }}</td>
              {{-- <td>{{ $item->text }}</td> --}}
              <td>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.projects.show', $item->id) }}" class="btn btn-success me-2"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="{{ route('admin.projects.edit', $item->id) }}" class="btn btn-warning me-2"><i class="fa-regular fa-pen-to-square"></i></a>
                    <form
                        class="d-inline"
                        action="{{ route('admin.projects.destroy', $item->id) }}"
                        method="POST"
                        onsubmit="return confirm('Sei sicuro di vole eliminare \'{{ $item->title }}\'?')"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                    </form>
                </div>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projects->links('pagination::bootstrap-5') }}

@endsection

