@extends('layouts.admin')

@section('content')
    <h2 class="text-white">Elenco Progetti</h2>

    @if (session('deleted'))

    <div class="alert alert-success" role="alert">
        {{ session('deleted')}}
    </div>

    @endif

    <table class="table table-success crud-table">
        <thead>
          <tr>
            <th scope="col">n°</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item)
            <tr>
              <th scope="row">{{ $item->id }}</th>
              <td>{{ $item->title }}</td>
              <td>{{ $item->text }}</td>
              <td>
                <div class="d-flex">
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

@endsection
