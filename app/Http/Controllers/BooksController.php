<?php

namespace App\Http\Controllers;

use App\Http\Requests\BooksRequest;
use App\Models\Books;

class BooksController extends Controller
{
    public function index()
    {
        return Books::all();
    }

    public function store(BooksRequest $request)
    {
        return Books::create($request->validated());
    }

    public function show(Books $book)
    {
        return $book;
    }

    public function update(BooksRequest $request, Books $book)
    {

        $book->update($request->validated());

        return $book;
    }

    public function destroy(Books $book)
    {
        $book->delete();

        return response()->json(null, 204);
    }
}
