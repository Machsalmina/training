<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/post', [postController::class, 'index'])->name('post.index');
Route::get('/post/create', [postController::class, 'create'])->name('post.create');
Route::post('/post/create', [postController::class, 'store'])->name('post.store');
Route::get('/post/{post}/edit', [postController::class, 'edit'])->name('post.edit');
Route::patch('/post/{post}/edit', [postController::class, 'update'])->name('post.update');
Route::delete('/post/{post}/delete', [postController::class, 'delete'])->name('post.delete');

