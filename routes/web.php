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

Route::get('/timeline', function () {
    return view('member.timeline');
});

//Route::get('/register-member-page/{id}', [MemberController::class,'registerMemberPage'])->name('registerMemberPage');
Route::post('/register-member/{id}/{memberNo}', [MemberController::class, 'createMember'])->name('createMember');
Route::get('/get-group', [MemberController::class, 'getGroupById'])->name('getGroupById');

Route::post('/upload-payment/{id}', [PaymentController::class, 'createPayment'])->name('createPayment');
Route::get('/get-group-payment', [PaymentController::class, 'getGroupByIdPayment'])->name('getGroupByIdPayment');

//Route::get('/get-groups', [AdminController::class, 'getGroups'])->name('getGroups');
//Route::get('/admin-dashboard', [AdminController::class,'dashboardPage'])->name('dashboardPage');
Route::get('/view-group/{id}', [AdminController::class, 'getGroupByIdView'])->name('getGroupByIdView');
Route::get('/view-member/{id}/{memberNo}', [AdminController::class, 'getMemberByIdView'])->name('getMemberByIdView');
Route::get('/edit-group/{id}', [AdminController::class, 'getGroupByIdEdit'])->name('getGroupByIdEdit');
Route::get('/edit-member/{id}/{memberNo}', [AdminController::class, 'getMemberByIdEdit'])->name('getMemberByIdEdit');
// Route::get('/update-group/{id}', [AdminController::class, 'getGroupByIdEdit'])->name('getGroupByIdEdit');
Route::patch('/update-group/{id}', [AdminController::class, 'updateGroup'])->name('updateGroup');
Route::patch('/update-member/{id}/{memberNo}', [AdminController::class, 'updateMember'])->name('updateMember');
Route::patch('/verify-group/{id}', [AdminController::class, 'verifyGroup'])->name('verifyGroup');
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
	Route::get('/groups-dashboard', [AdminController::class, 'getGroupsDashboard'])->name('getGroupsDashboard');
    Route::get('/update-group/{id}', [AdminController::class, 'getGroupByIdEdit'])->name('getGroupByIdEdit');
});



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//veriftokenpw
Route::get('/verifikasitoken', [App\Http\Controllers\auth\VerifikasiController::class, 'verifikasitoken'])->name('verifikasitoken');
Route::post('/postveriftoken', [App\Http\Controllers\auth\VerifikasiController::class, 'postveriftoken'])->name('postveriftoken');

//dashboard panel
Route::get('/dashboard', [MemberController::class, 'dashboardView'])->name('dashboardView');


Route::get('/maki', function (){
    return view('auth.veriftokenaja');
    }
);


