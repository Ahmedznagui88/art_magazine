<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArtistsController;

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

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/lab', [PublicController::class, 'lab'])->name('lab');
Route::get('artists', [ArtistsController::class, 'index'])->name('artists');
Route::get('artist/detail/{id}',[ArtistsController::class, 'show'])->name('artist-detail');
Route::get('contact', [PublicController::class, 'contact'])->name('contact');
Route::post('contact/send', [PublicController::class, 'contactSubmit'])->name('send.contact');