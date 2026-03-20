<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::resource('user' , UserController::class);

Route::resource('role' , RoleController::class);
