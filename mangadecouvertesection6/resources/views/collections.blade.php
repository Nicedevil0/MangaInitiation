@extends('layouts.layout')

@section('titrePage')
    Liste des Collections
@endsection

@section('titreItem')
    <h1>Toutes les collections :</h1>
@endsection

@section('contenu')
<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Prix</th>
            </tr>
        </thead>
        @foreach($collections as $collection)
            <tr>
                <td> {{ $collection->id }} </td>
                <td><strong>{{ $collection->titre }}</strong> </td>
                <td> {{ $collection->prix }} </td>
                <td><a class="btn btn-primary" href="{{ route('collections.show',$collection->id) }}">Voir</a></td>
            </tr>
        @endforeach
    </table>
@endsection