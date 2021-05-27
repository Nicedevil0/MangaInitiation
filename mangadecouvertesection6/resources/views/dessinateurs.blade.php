@extends('layouts.layout')

@section('titrePage')
    Liste des Dessinateurs
@endsection

@section('titreItem')
    <h1>Tous les dessinateurs :</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
        </thead>
        @foreach($dessinateurs as $des)
            <tr>
                <td> {{ $des->id_dessinateur }} </td>
                <td> {{ $des->nom_dessinateur }} </td>
                <td> {{ $des->prenom_dessinateur }} </td>
            </tr>
        @endforeach
    </table>
@endsection