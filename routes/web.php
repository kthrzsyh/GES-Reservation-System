<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
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
    return view('welcome');
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
