<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TesController::class, 'home']);
Route::get('/about', [TesController::class, 'about']);
Route::get('/blog', [TesController::class, 'blog']);
