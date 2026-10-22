<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/resep', [RecipeController::class, 'index'])
    ->name('recipes.index');

Route::get('/resep/{id}', [RecipeController::class, 'show'])
    ->name('recipes.show');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');