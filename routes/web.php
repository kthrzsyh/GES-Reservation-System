<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KursiController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberDetailController;
use App\Http\Controllers\ReservasiController;
use App\Models\Member;
use App\Models\Reservasi;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/detail/{id}', [EventController::class, 'detailEvent']);
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::post('/pendaftaran', [MemberController::class, 'pendaftaran']);

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    Route::prefix('/event')->group(function () {
        Route::get('/', [EventController::class, 'index']);
        Route::get('/add', [EventController::class, 'addEvent']);
        Route::post('/add', [EventController::class, 'postEvent']);
        Route::delete('/delete/{id}', [EventController::class, 'deleteEvent']);
        Route::get('/edit/{id}', [EventController::class, 'editEvent']);
        Route::post('/update', [EventController::class, 'updateEvent']);
        Route::get('/detail/{id}', [EventController::class, 'detailEvent']);
        Route::get('/EventReport', [EventController::class, 'EventReport']);
        Route::get('/EventReportDetail/{id}', [EventController::class, 'EventReportDetail']);
        Route::post('/absensi', [EventController::class, 'absensi']);
    });
    Route::prefix('/member')->group(function () {
        Route::get('/', [MemberController::class, 'list']);
        Route::get('/add', [MemberController::class, 'addPage']);
        Route::post('/add', [MemberController::class, 'add']);
        Route::get('/detail/{id}', [MemberDetailController::class, 'detail']);
    });
    Route::prefix('/kursi')->group(function () {
        Route::get('/', [KursiController::class, 'index']);
        Route::get('/add', [KursiController::class, 'addPage']);
        Route::post('/insert', [KursiController::class, 'insert']);
        Route::get('/edit/{id}', [KursiController::class, 'edit']);
        Route::post('/update', [KursiController::class, 'update']);
    });
});

Route::post('/login', [loginController::class, 'login']);
Route::get('/login', function () {
    return view('login');
});

Route::prefix('/member')->group(function () {
    Route::get('/', [MemberController::class, 'index']);
    Route::get('/edit/{id}', [MemberController::class, 'edit']);
    Route::post('/edit', [MemberController::class, 'update']);
    Route::post('/reservasi', [ReservasiController::class, 'insert']);
    Route::get('/reservasimember', [MemberController::class, 'reservasi']);
    Route::get('/reservasimember/{id}', [MemberController::class, 'detail_reservasi']);
});

Route::get('/test/{even}', [ReservasiController::class, 'cek']);
Route::get('/logout', [loginController::class, 'logout']);
