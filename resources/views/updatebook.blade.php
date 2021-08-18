@extends('layouts.base')

@section('title','addbook')

@section('content')
    <h1>Modifier un livre</h1>

    <form action="/updatebook" method="post">
        @csrf
        <div>
            <label for="title">Titre :</label>
            <input type="text" name="title" value="{{$book->title}}">
        </div>
        <div>
            <label for="author">Auteur :</label>
            <input type="text" name="author" value="{{$book->author}}">
        </div>
        <div>
            <label for="publication_year">Année de publication :</label>
            <input type="number" name="publication_year" value="{{$book->publication_year}}" id="">
        </div>
        <div>
            <label for="genre">Genre</label>
            <input type="text" name="genre" value="{{$book->genre}}">
        </div>
        <div>
            <label for="synopsis">Synopsis :</label>
            <textarea name="synopsis" id="" cols="30" rows="10">{{$book->synopsis}}</textarea>
        </div>
        <div>
            <input type="hidden" name="id" value="{{$book->id}}">
            <input type="submit" value="Modifier">
        </div>


    </form>

@endsection
