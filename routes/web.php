<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberDetailController;
use App\Models\Member;
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
    return view('home');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::post('/pendaftaran', [MemberController::class, 'pendaftaran']);
Route::get('/member', [MemberController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/event', [EventController::class, 'index']);
Route::get('/addEvent', [EventController::class, 'addEvent']);
Route::post('/addEvent', [EventController::class, 'postEvent']);
Route::delete('/deleteEvent/{id}', [EventController::class, 'deleteEvent']);
Route::get('/editEvent/{id}', [EventController::class, 'editEvent']);
Route::post('/updateEvent', [EventController::class, 'updateEvent']);
Route::post('/login', [loginController::class, 'login']);
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', [loginController::class, 'logout']);
Route::get('/admin/member/detail/{id}', [MemberDetailController::class, 'detail']);
Route::get('/member/editmember/{id}', [MemberController::class, 'edit']);
Route::post('/member/editmember', [MemberController::class, 'update']);
