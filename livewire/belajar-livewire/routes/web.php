<?php

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

Route::get('/post', \App\Http\Livewire\Post\Index::class)->name('post.index');

Route::get('/post/create', \App\Http\Livewire\Post\Create::class)->name('post.create');

Route::get('/post/edit/{id}', \App\Http\Livewire\Post\Edit::class)->name('post.edit');

// Route::livewire('/post', 'post.index')->layout('layouts.app');