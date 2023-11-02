<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/book', [BukuController::class, 'index'])->name('book.index');
Route::get('/book/create', [BukuController::class, 'create'])->name('book.create');
Route::post('/book', [BukuController::class, 'store'])->name('book.store');
Route::get('/book/{id}', [BukuController::class, 'show'])->name('book.show');
Route::get('/book/{id}/edit', [BukuController::class, 'edit'])->name('book.edit');
Route::put('/book/{id}', [BukuController::class, 'update'])->name('book.update');
Route::delete('/book/{id}', [BukuController::class, 'destroy'])->name('book.destroy');

// Route::get('about-me', function () {
//     return view('about-me');
// });