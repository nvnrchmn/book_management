@extends('layout')

@section('content')
<div class="max-w-xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-4">✏️ Edit Buku</h2>

    <form action="{{ route('books.update', $book->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Judul</label>
            <input type="text" name="title" value="{{ $book->title }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-semibold">Penulis</label>
            <input type="text" name="author" value="{{ $book->author }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('books.index') }}" class="text-blue-600 hover:underline">← Kembali</a>
            <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
