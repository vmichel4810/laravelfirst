<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publication_year = $request->publication_year;
        $book->genre = $request->genre;
        $book->synopsis = $request->synopsis;
        $book->save();

        return redirect('readbook');
    }

    public function updatebook(Request $request)
    {
        // dd($request);
        $book= Book::findOrFail($request->id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publication_year = $request->publication_year;
        $book->genre = $request->genre;
        $book->synopsis = $request->synopsis;
        // dd($book);
        $book->save();
        return redirect('readbook');
    }

    public function delete(Request $request)
    {
        // dd($request);
        $book = Book::findOrFail($request->id);

        $book->delete();

        return redirect('readbook');
    }
}
