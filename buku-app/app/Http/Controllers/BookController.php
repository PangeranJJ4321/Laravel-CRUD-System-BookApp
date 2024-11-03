<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan semua buku
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Menampilkan form untuk menambahkan buku baru
    public function create()
    {
        return view('books.create');
    }

    // Menyimpan buku baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    // Menampilkan detail buku tertentu
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    // Menampilkan form untuk mengedit data buku
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    // Memperbarui data buku di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    // Menghapus data buku dari database
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
    }
}
