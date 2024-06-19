<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\LoanScheduleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

// USER CONTROLER AND GUEST ACCESS 
Route::get('/', function () {
    return view('home');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/store', [RegisterController::class, 'store']);

Route::get('/building', [BuildingController::class, 'index']);
Route::get('/forms', [LoanScheduleController::class, 'create'])->middleware('auth');
Route::post('/create-schedule', [LoanScheduleController::class, 'store'])->middleware('auth');
Route::get('/detail/{id}', [LoanScheduleController::class, 'show']);
Route::get('/history', [LoanScheduleController::class, 'history'])->middleware('auth');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('admin');
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout']);
    Route::get('/building', [BuildingController::class, 'showAdmin'])->name('admin.building');
    Route::get('/form', [BuildingController::class, 'showAdmin'])->name('admin.form');
    Route::get('/schedules', [LoanScheduleController::class, 'showAdmin'])->name('admin.schedules');
    Route::get('/schedules/{id}', [LoanScheduleController::class, 'detailAdmin'])->name('detail.schedules');
    Route::put('/schedules/edit/{id}', [LoanScheduleController::class, 'edit'])->name('detail.schedules.edit');
});
