<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(ComicController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/search', 'index')->name('comics.index');
    Route::post('/comics', 'store')->name('store');
    Route::get('/comics/create', 'create')->name('create');
    Route::get('/comics/{comic}', 'show')->name('show');
    Route::put('/comics/{comic}', 'update')->name('update');
    Route::delete('/comics/{comic}', 'delete')->name('delete');
    Route::get('/comics/{comic}/edit', 'edit')->name('edit');
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('comment', 'App\Http\Controllers\CommentsController', ['only' => ['store']]);
