<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\MemberController;
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

Route::get('/register-member-page/{id}', [MemberController::class,'registerMemberPage'])->name('registerMemberPage');
Route::post('/register-member/{id}', [MemberController::class, 'createMember'])->name('createMember');
Route::get('/get-group', [MemberController::class, 'getGroupById'])->name('getGroupById');

Route::get('/get-groups', [AdminController::class, 'getGroups'])->name('getGroups');
Route::get('/update-group/{id}', [AdminController::class, 'getGroupByIdd'])->name('getGroupByIdd');
Route::patch('/update-group/{id}', [AdminController::class, 'updateGroup'])->name('updateGroup');
Route::delete('/delete-group/{id}', [AdminController::class, 'deleteGroup'])->name('delete');

Route::get('/search-group', [AdminController::class, 'searchGroup'])->name('searchGroup');

// Route::get('/update-song/{id}', [SongController::class, 'getSongById'])->name('getSongById');

// Route::patch('/update-song/{id}', [SongController::class, 'updateSong'])->name('updateSong');

// Route::delete('/delete-song/{id}', [SongController::class, 'deleteSong'])->name('delete');

// Route::get('/search', [SongController::class, 'search'])->name('searchSong');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
