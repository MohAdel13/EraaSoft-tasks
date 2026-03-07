<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/home', [HomeController::class, 'home'])->name('home');

    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

    Route::get('/about', [AboutController::class, 'about'])->name('about');

    Route::get('/single-post/{post_id}', [PostController::class, 'singlePost'])->name('single-post');

    Route::get('/category/{category_id}', [CategoryController::class, 'category'])->name('category');

    Route::get('/seed', [DatabaseSeeder::class, 'run']);
});

require __DIR__ . '/auth.php';
