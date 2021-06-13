@extends('layouts.layout')

@section('contenu')
<br>
<div class="container">
<div class="row card text-white bg-dark">
<h4 class="card-header">Ajouter un manga</h4>
<div class="card-body">
    <form action="{{ route('mangas.store') }}" method="POST">
        @csrf
        <br>
        <div class="form-group">
        <input type="text" class="form-control @error('nomDessinateur') is-invalid @enderror" name="nomDessinateur" id="nomDessinateur" placeholder="Nom du dessinateur">
        @error('nomDessinateur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control @error('nomScenariste') is-invalid @enderror" name="nomScenariste" id="nomScenariste" placeholder="Nom du scenariste">
        @error('nomScenariste')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" id="genre" placeholder="Genre du manga">
        @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" id="prix" placeholder="Prix du manga">
        @error('prix')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control" name="couverture" id="couverture" placeholder="Couverture du manga">
        </div>
        <br>
        <button type="submit" class="btn btn-secondary">-> Envoyer -></button>
    </form>
@endsection