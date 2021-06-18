<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\PostTypeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;

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
Route::get('/admin', function () {
    return view('dashboard/dashboard');
})->name('dashboard');


Route::prefix('admin')->group(function () {
    Route::resource('advs', AdvController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('posts', PostController::class);
    Route::resource('post-tags', PostTagController::class);
    Route::resource('post-types', PostTypeController::class);
    Route::resource('tags', TagController::class);
    Route::resource('users', UserController::class);
    Route::get('/dashboard', function () {
        return view('dashboard/dashboard');
    })->name('dashboard');
});