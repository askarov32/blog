<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\PostViewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('posts', PostController::class)->names('admin.posts');
        Route::resource('categories', CategoryController::class)->names('admin.categories');
        Route::resource('roles', RoleController::class)->names('admin.roles');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [PostViewController::class, 'index'])->name('posts');

Route::get('/', function () {
    return view('welcome');
});