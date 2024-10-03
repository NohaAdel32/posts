<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FileUploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('index',[IndexController::class, 'home'])->name('index');
Route::get('show/{id}', [PostController::class,'show']);

Route::prefix('user')->middleware(['auth'])->group(function () {
    //posts
Route::get('addPost', [PostController::class,'create'])->name('addPost');
Route::post('storePost',[PostController::class,'store'])->name('storePost');
Route::get('Posts',[PostController::class,'index'])->name('Posts');
Route::get('editPost/{id}', [PostController::class,'edit'])->name('editPost');
Route::put('updatePost/{id}', [PostController::class,'update'])->name('updatePost');
Route::get('show/{id}', [PostController::class,'show']);
Route::get('delete/{id}', [PostController::class,'destroy']);
//file upload
Route::get('upload/{id}', [FileUploadController::class, 'create'])->name('create');
Route::post('upload', [FileUploadController::class, 'store'])->name('storeFile');



});