<?php

use App\Http\Controllers\LeaderController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/register-leader-page', [LeaderController::class,'registerLeaderPage'])->name('registerLeaderPage');
Route::post('/register-leader', [LeaderController::class, 'createLeader'])->name('createLeader');
Route::get('/get-leaders', [LeaderController::class, 'getLeaders'])->name('getLeaders');

// Route::get('/update-song/{id}', [SongController::class, 'getSongById'])->name('getSongById');

// Route::patch('/update-song/{id}', [SongController::class, 'updateSong'])->name('updateSong');

// Route::delete('/delete-song/{id}', [SongController::class, 'deleteSong'])->name('delete');

// Route::get('/search', [SongController::class, 'search'])->name('searchSong');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
