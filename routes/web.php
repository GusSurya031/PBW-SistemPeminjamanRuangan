<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\LoanScheduleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboards.dashboard');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/store', [RegisterController::class, 'store']);


Route::get('/schedules', [LoanScheduleController::class, 'index']);
Route::get('/forms', [LoanScheduleController::class, 'create']);

Route::get('/facility', [FacilityController::class, 'index']);

Route::get('/building', [BuildingController::class, 'index']);

Route::get('/room', [RoomController::class, 'index']);
