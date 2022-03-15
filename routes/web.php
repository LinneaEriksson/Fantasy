<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CharacterGalleryController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->middleware('guest')->name('index');

Route::post('/book', [BookController::class, 'book', 'question'])->middleware('guest')->name('book');

Route::post('/character', [CharacterController::class, 'character'])->middleware('guest')->name('character');

Route::get('/gallery', [GalleryController::class, 'gallery'])->middleware('guest')->name('gallery');

Route::post('/charactergallery', [CharacterGalleryController::class, 'charactergallery'])->middleware('guest')->name('charactergallery');

// Route::post('/extra', [CharacterController::class, 'character'])->name('extra');
