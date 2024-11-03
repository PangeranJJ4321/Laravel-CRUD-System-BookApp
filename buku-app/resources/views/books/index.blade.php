<!-- resources/views/books/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Buku</h2>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
