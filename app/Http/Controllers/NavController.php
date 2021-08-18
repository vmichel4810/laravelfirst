<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Client\Request;
use App\Models\Book;
use Illuminate\Http\Request;


class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function addBook()
    {
        return view('addbook');
    }

    public function readBook()
    {
        $books = Book::all();
        return view('readbook', ['allthebooks'=> $books]);
    }

    public function oneBook($id)
    {
        $books = Book::findOrFail($id);
        // dd($books);
        return view('onebook', ['book'=> $books]);
    }

    public function updatebook(Request $request)
    {
        // dd($request->id);
        $book = Book::findOrFail($request->id);
        return view('updatebook', ['book'=>$book]);
    }

    public function contact()
    {
        return view('contact');
    }

}
