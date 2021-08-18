@extends('layouts.base')

@section('title','onebook')

@section('content')
    <h1>Le Livre demandé</h1>

    <table>
        <thead>

            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>plublication year</th>
                <th>genre</th>
                <th>synopsis</th>
            </tr>
        </thead>
        <tr> 
            <td>{{ $book->title}}</td>
            <td>{{ $book->author}}</td>
            <td>{{ $book->publication_year}}</td>
            <td>{{ $book->genre}}</td>
            <td>{{ $book->synopsis}}</td>
        </tr>
    </table>

@endsection
