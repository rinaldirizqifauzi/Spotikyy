<?php

use App\Http\Controllers\BandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.backend');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Musik
Route::get('/posting', [PostingController::class, 'index'])->name('posting.index');
Route::get('/posting/create', [PostingController::class, 'create'])->name('posting.create');
Route::post('/posting', [PostingController::class, 'store'])->name('posting.store');
Route::get('/posting/{id}/show', [PostingController::class, 'show'])->name('posting.show');
Route::get('/posting/{id}/fullscreen', [PostingController::class, 'fullscreen'])->name('posting.fullscreen');
Route::get('/posting/{id}/edit', [PostingController::class, 'edit'])->name('posting.edit');
Route::post('/posting/{id}/update', [PostingController::class, 'update'])->name('posting.update');
Route::get('/posting/{id}/delete', [PostingController::class, 'delete'])->name('posting.delete');

// Band
Route::get('/bands', [BandController::class, 'index'])->name('band.index');
Route::get('/bands/create', [BandController::class, 'create'])->name('band.create');
Route::post('/bands', [BandController::class, 'store'])->name('band.store');
Route::get('/bands/{id}/edit', [BandController::class, 'edit'])->name('band.edit');
Route::post('/bands/{id}/update', [BandController::class, 'update'])->name('band.update');
Route::get('/bands/{id}/delete', [BandController::class, 'delete'])->name('band.delete');

// Genre
Route::get('/genres', [GenreController::class, 'index'])->name('genre.index');
Route::get('/genres/create', [GenreController::class, 'create'])->name('genre.create');
Route::post('/genres', [GenreController::class, 'store'])->name('genre.store');
Route::get('/genres/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
Route::post('/genres/{id}/update', [GenreController::class, 'update'])->name('genre.update');
Route::get('/genres/{id}/delete', [GenreController::class, 'delete'])->name('genre.delete');

// Genre
Route::get('/types', [TypeController::class, 'index'])->name('type.index');
Route::get('/types/create', [TypeController::class, 'create'])->name('type.create');
Route::post('/types', [TypeController::class, 'store'])->name('type.store');
Route::get('/types/{id}/edit', [TypeController::class, 'edit'])->name('type.edit');
Route::post('/types/{id}/update', [TypeController::class, 'update'])->name('type.update');
Route::get('/types/{id}/delete', [TypeController::class, 'delete'])->name('type.delete');

// Menu
Route::get('/album/{id}',[DashboardController::class,'showPostsByBands'])->name('albums.bands');
Route::get('/genre/{id}',[DashboardController::class, 'showPostsByGenres'])->name('genres.bands');
Route::get('/type/{id}',[DashboardController::class, 'showPostsByTypes'])->name('types.bands');
