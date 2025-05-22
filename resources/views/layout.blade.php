<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Manajemen Buku')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-5 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">
                @yield('header', 'Manajemen Buku')
            </h1>
            <nav>
                <a href="{{ route('books.index') }}" class="text-gray-700 hover:text-blue-500 px-4">Beranda</a>
                <a href="{{ route('books.create') }}" class="text-gray-700 hover:text-blue-500 px-4">Tambah Buku</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-12">
        <div class="container mx-auto px-4 py-6 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Aplikasi Manajemen Buku. All rights reserved.
        </div>
    </footer>

</body>
</html>
