@extends('layout')

@section('content')
<div class="max-w-xl mx-auto py-8 px-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-3xl font-semibold text-center mb-6">Detail Buku</h2>

    <div class="space-y-4">
        <p><span class="font-semibold text-gray-700">Judul:</span> {{ $book->title }}</p>
        <p><span class="font-semibold text-gray-700">Penulis:</span> {{ $book->author }}</p>
    </div>

    <div class="flex justify-center mt-6">
        <a href="{{ route('books.index') }}"
           class="text-blue-600 hover:text-blue-900 text-lg font-semibold">
            ← Kembali
        </a>
    </div>
</div>
@endsection
