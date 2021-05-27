@extends('layouts.layout')

@section('titrePage')
    Information sur le manga
@endsection

@section('contenu')
    <div class="card mb-3" style="maw-width=540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset($path)}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Titre : {{$manga->titre}}</h5>
                    <p class="card-text">Dessinateur : {{ $dessinateur->prenom_dessinateur .' '. $dessinateur->nom_dessinateur}}</p>
                    <p class="card-text">Scénariste : {{ $scenariste->prenom_scenariste .' '. $scenariste->nom_scenariste}}</p>
                    <p class="card-text">Genre : {{ $genre->lib_genre}}</p>
                    <p class="card-text">Prix : {{ $manga->prix}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection