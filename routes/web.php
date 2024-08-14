<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController; // Import the EmployeeController
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/users/{id}/{cop}', [UserController::class, 'users']);
Route::get('/employee', [EmployeeController::class, 'index']);  // Correctly defined route for EmployeeController
