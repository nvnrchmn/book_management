<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BookController::class, 'index'])->name('books.index');
//      */
//     public function update(Request $request, string $id)
//     {
//         $book = Book::findOrFail($id);
//         $book->update($request->validate([
//             'title' => 'required|string|max:255',
//             'author' => 'required|string|max:255',
//         ]));
//         return redirect()->route('books.index')->with('success', 'Book updated successfully.');
//     }
//
//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         $book = Book::findOrFail($id);
//         $book->delete();
//         return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
//     }
Route::get('/buku/create', [BookController::class, 'create'])->name('books.create');
Route::post('/buku', [BookController::class, 'store'])->name('books.store');
Route::get('/buku/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/buku/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/buku/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/buku/{id}', [BookController::class, 'destroy'])->name('books.destroy');