@extends('layouts.layout')

@section('titrePage')
    Information sur le manga
@endsection

@section('contenu')
    <div class="card mb-3" style="maw-width=540px;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Titre : {{$collection->titre}}</h5>
                    <p class="card-text">Prix : {{ $collection->prix}}</p>
                    <p class=>Les mangas de cette collection :</p>
                    <ul>
                        @foreach($collection->mangas as $manga)
                        <li>{{$manga->titre}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection