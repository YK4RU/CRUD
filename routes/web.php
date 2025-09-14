<?php

use App\Http\Controllers\PhotosController;
use Illuminate\Support\Facades\Route;

Route::get('/photos', [PhotosController::class, 'index'])->name('photos.index');

Route::get('/photos/create', [PhotosController::class, 'create'])->name('photos.create');
Route::post('/photos', [PhotosController::class, 'store'])->name('photos.store');
Route::get('/photos/{photo}', [PhotosController::class, 'show'])->name('photos.show');
Route::get('/photos/{photo}/edit', [PhotosController::class, 'edit'])->name('photos.edit');
Route::put('/photos/{photo}', [PhotosController::class, 'update'])->name('photos.update');
Route::delete('/photos/{photo}', [PhotosController::class, 'destroy'])->name('photos.destroy');

