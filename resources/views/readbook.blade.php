@extends('layouts.base')

@section('title','readbook')

@section('content')
    <h1>Les Livres</h1>

    <table>
        <thead>

            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>plublication year</th>
                <th>genre</th>
            </tr>
        </thead>
        @foreach ($allthebooks as $books)
        <tr>
            <td>
                <a href="onebook/{{ $books->id}}">{{$books->title}}</a>
            </td>
            <td>{{ $books->author}}</td>
            <td>{{ $books->publication_year}}</td>
            <td>{{ $books->genre}}</td>
            <td>
                <form action="deleteBook" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$books->id}}">
                    <input type="submit" value="supprimer">
                </form>
            </td>
            <td>
                <form action="updatebook" method="get">
                    @csrf
                    <input type="hidden" name="id" value="{{$books->id}}">
                    <input type="submit" value="Modifier">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
