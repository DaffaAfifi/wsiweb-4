<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'index']);
    Route::post('login', [AuthController::class, 'authenticated']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);

    //blog
    Route::get('/blog', [BlogController::class, 'index']);
    Route::get('/blog-detail/{id}', [BlogController::class, 'show']);
    Route::get('/blog-add', [BlogController::class, 'storeView']);
    Route::post('/blog', [BlogController::class, 'store']);
    Route::get('/blog-update/{id}', [BlogController::class, 'updateView']);
    Route::put('/blog/{id}', [BlogController::class, 'update']);
    Route::post('blog-delete', [BlogController::class, 'destroy']);
    Route::get('blog-active/{id}', [BlogController::class, 'active']);
    Route::get('blog-non-active/{id}', [BlogController::class, 'nonactive']);
});
