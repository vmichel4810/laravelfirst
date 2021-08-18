@extends('layouts.base')

@section('title','addbook')

@section('content')
    <h1>Ajouter un livre</h1>

    <form action="/addBook" method="post">
        @csrf
        <div>
            <label for="title">Titre :</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="author">Auteur :</label>
            <input type="text" name="author">
        </div>
        <div>
            <label for="plublication_year">Année de publication :</label>
            <input type="number" name="publication_year" id="">
        </div>
        <div>
            <label for="genre">Genre</label>
            <input type="text" name="genre">
        </div>
        <div>
            <label for="synopsis">Synopsis :</label>
            <input type="text" name="synopsis">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>


    </form>

@endsection
