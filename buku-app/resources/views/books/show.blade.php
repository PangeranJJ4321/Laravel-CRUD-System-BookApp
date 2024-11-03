<!-- resources/views/books/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Detail Buku</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Penulis: {{ $book->author }}</h6>
            <p class="card-text">{{ $book->description }}</p>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection
