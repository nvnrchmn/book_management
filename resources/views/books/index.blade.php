@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">📚 Daftar Buku</h2>
        <a href="{{ route('books.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Tambah Buku
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <ul class="space-y-4">
        @foreach($books as $book)
            <li class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-semibold">{{ $book->title }}</h3>
                    <p class="text-gray-600">Penulis: {{ $book->author }}</p>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('books.edit', $book->id) }}" class="text-white bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded">Edit</a>
                    <a href="{{ route('books.show', $book->id) }}" class="text-white bg-indigo-500 hover:bg-indigo-600 px-3 py-1 rounded">Lihat</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-500 hover:bg-red-600 px-3 py-1 rounded">Hapus</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
