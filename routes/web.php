<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\LoanScheduleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware('guest');

// Route::get('/dashboard', function () {
//     return view('dashboards.dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/store', [RegisterController::class, 'store']);

Route::get('/schedules', [LoanScheduleController::class, 'index'])->middleware('auth');
Route::get('/forms', [LoanScheduleController::class, 'create'])->middleware('auth');
Route::post('/create-schedule', [LoanScheduleController::class, 'store'])->middleware('auth');

Route::get('/facility', [FacilityController::class, 'index'])->middleware('auth');

Route::get('/building', [BuildingController::class, 'index'])->middleware('auth');

Route::get('/room', [RoomController::class, 'index'])->middleware('auth');
// Route::resource('room', RoomController::class);
