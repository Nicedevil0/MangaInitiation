@extends('layouts.layout')

@section('titrePage')
    Liste des Mangas
@endsection

@section('titreItem')
    <h1>Tous les mangas :</h1>
@endsection

@section('contenu')
@if(session()->has('info'))
    <div class="card text-white bg-success mb-3" style="max-width:18rem;">
        <div class="card-body">
            <p class="card-text">{{ session('info') }}</p>
        </div>
    </div>
@endif
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Genre</th>
                <th></th>
                <th></th>
                <th><a class="btn btn-success" href="{{ route('mangas.create') }}">Nouveau manga</a></th>
            </tr>
        </thead>
        @foreach($mangas as $manga)
            <tr>
                <td> {{ $manga->id }} </td>
                <td> {{ $manga->titre }} </td>
                <td> {{ $manga->genre }} </td>
                <td><a class="btn btn-primary" href="{{ route('mangas.show',$manga->id) }}">Voir</a></td>
                <td><a class="btn btn-warning" href="{{ route('mangas.edit',$manga->id) }}">Modifier</a></td>
                <td>
                    <form action="{{ route('mangas.destroy',$manga->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection