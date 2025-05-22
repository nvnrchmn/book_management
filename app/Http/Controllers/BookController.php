<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create($request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
        ]));
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('books.show', [
            'book' => Book::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('books.edit', [
            'book' => Book::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id); // Tambahkan baris ini
        $book->update($request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
        ]));

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id); // Tambahkan baris ini
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
