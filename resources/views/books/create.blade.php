@extends('layout')

@section('content')
<div class="max-w-2xl mx-auto py-8 px-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-3xl font-semibold text-center mb-6">Tambah Buku Baru</h2>

    <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label class="block text-lg font-semibold text-gray-700">Judul</label>
            <input type="text" name="title" 
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                   placeholder="Masukkan judul buku">
        </div>

        <div>
            <label class="block text-lg font-semibold text-gray-700">Penulis</label>
            <input type="text" name="author" 
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                   placeholder="Masukkan nama penulis">
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('books.index') }}" class="text-blue-600 hover:text-blue-800 text-lg font-semibold">
                ← Kembali
            </a>
            <button type="submit" 
                    class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition duration-300">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
