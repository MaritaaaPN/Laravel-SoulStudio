<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtworkController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/artist/tambah', [ArtistController::class, 'create']);
Route::post('/artist/store', [ArtistController::class, 'store']);
Route::get('/artist/edit/{id}', [ArtistController::class, 'edit']);
Route::put('/artist/update/{id}', [ArtistController::class, 'update']);
Route::get('/artist/hapus/{id}', [ArtistController::class, 'delete']);
Route::get('/artist/destroy/{id}', [ArtistController::class, 'destroy']);

Route::get('/artwork', [ArtworkController::class, 'index']);
Route::get('/artwork/tambah', [ArtworkController::class, 'create']);
Route::post('/artwork/store', [ArtworkController::class, 'store']);
Route::get('/artwork/edit/{id}', [ArtworkController::class, 'edit']);
Route::put('/artwork/update/{id}', [ArtworkController::class, 'update']);
Route::get('/artwork/hapus/{id}', [ArtworkController::class, 'delete']);
Route::get('/artwork/destroy/{id}', [ArtworkController::class, 'destroy']);
