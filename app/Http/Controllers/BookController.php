<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        // return [];
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);
        // return $request;
        $book = new Book();
        $book->title = $request->input('title');
        $book->save();

        return $book;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     *
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     *
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required'
        ]);
        $book->title = $request->input('title');
        $book->save();
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     *
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->noContent();
    }
}
