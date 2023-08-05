<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::get('/admin-register' , [RegisteredUserController::class , 'create']);
Route::post('/admin-register' , [RegisteredUserController::class , 'store']);
Route::get('/admin-login' , [AuthenticatedSessionController::class , 'create']);
Route::post('/admin-login' , [AuthenticatedSessionController::class , 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
