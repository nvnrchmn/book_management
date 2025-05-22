# 📚 Aplikasi Manajemen Buku

Aplikasi CRUD sederhana untuk mengelola data buku menggunakan Laravel 10, Tailwind CSS, dan Vite.

## 🚀 Fitur

- Menampilkan daftar buku
- Menambahkan buku baru
- Mengedit data buku
- Menghapus data buku
- Melihat detail buku

## 🛠️ Teknologi yang Digunakan

- Laravel 10
- Tailwind CSS
- Vite
- PHP 8.x
- MySQL / SQLite (opsional sesuai konfigurasi)

## 🔧 Instalasi dan Menjalankan Project

1. **Clone Repository**

   ```bash
   git clone https://github.com/username/book-management.git
   cd book-management
    
2. **Install Dependency PHP dan JS**
    ```bash
    composer install
    npm install

3. **Copy dan Konfigurasi File .env**
    ```bash
    cp .env.example .env
    php artisan key:generate

4. **Migrasi Database**
    ```bash
    php artisan migrate

5. **Jalankan Vite dan Laravel**
    - Untuk dev environtment:
    ```bash
    npm run dev
    php artisan serve

6. **Akses Aplikasi**
    Buka browser dan akses: http://127.0.0.1:8000/buku

## 📂 Struktur Folder Penting
    - resource/views/books -> Halaman CRUD
    - resource/css/apps.css -> Styling menggunakan Tailwind
    - routes/web.php -> Routing Aplikasi

## Lisensi
 Project ini dibuat untuk keperluan pembelajaran