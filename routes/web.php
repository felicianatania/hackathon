<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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

//Route::get('/register-member-page/{id}', [MemberController::class,'registerMemberPage'])->name('registerMemberPage');
Route::post('/register-member/{id}', [MemberController::class, 'createMember'])->name('createMember');
Route::get('/get-group', [MemberController::class, 'getGroupById'])->name('getGroupById');

Route::post('/upload-payment/{id}', [PaymentController::class, 'createPayment'])->name('createPayment');
Route::get('/get-group-payment', [PaymentController::class, 'getGroupByIdPayment'])->name('getGroupByIdPayment');

//Route::get('/get-groups', [AdminController::class, 'getGroups'])->name('getGroups');
Route::get('/view-group/{id}', [AdminController::class, 'getGroupByIdView'])->name('getGroupByIdView');
Route::get('/update-group/{id}', [AdminController::class, 'getGroupByIdd'])->name('getGroupByIdd');
Route::patch('/update-group/{id}', [AdminController::class, 'updateGroup'])->name('updateGroup');
Route::delete('/delete-group/{id}', [AdminController::class, 'deleteGroup'])->name('delete');

Route::get('/search-group', [AdminController::class, 'searchGroup'])->name('searchGroup');
Route::get('/order-group', [AdminController::class, 'orderGroup'])->name('orderGroup');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//forgetpw
Route::post('/forgetpw', [App\Http\Controllers\auth\ForgotPasswordController::class, 'forgetpw'])->name('forgetpw');

//////////////////////////MIDDLEWARE///////////////////////////////////////

Route::group(['middleware' => IsAdminMiddleware::class], function(){
	Route::get('/get-groups', [AdminController::class, 'getGroups'])->name('getGroups');
});



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//veriftokenpw
Route::get('/verifikasitoken', [App\Http\Controllers\auth\VerifikasiController::class, 'verifikasitoken'])->name('verifikasitoken');
Route::post('/postveriftoken', [App\Http\Controllers\auth\VerifikasiController::class, 'postveriftoken'])->name('postveriftoken');



Route::get('/maki', function (){
    return view('auth.veriftokenaja');
    }
);

