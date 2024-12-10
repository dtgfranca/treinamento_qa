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

    public function show(Books $books)
    {
        return $books;
    }

    public function update(BooksRequest $request, Books $books)
    {
        $books->update($request->validated());

        return $books;
    }

    public function destroy(Books $books)
    {
        $books->delete();

        return response()->json();
    }
}
