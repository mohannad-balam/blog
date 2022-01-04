<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PagesController::class,'index']);

Route::group(['prefix' => 'blog',], function(){
    Route::get('/', [PostsController::class, 'index']);
    Route::get('/create', [PostsController::class, 'create'])->name('createRoute');
    Route::post('/store', [PostsController::class, 'store'])->name('storeRoute');
    Route::get('/show/{slug}', [PostsController::class, 'show'])->name('showRoute');
    Route::get('/{slug}/edit', [PostsController::class, 'edit'])->name('editRoute');
    Route::post('/{slug}/update', [PostsController::class, 'update'])->name('updateRoute');
    Route::post('/{slug}/delete', [PostsController::class, 'destroy'])->name('deleteRoute');
});


