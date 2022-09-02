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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'admin'], function (){
    Route::get('/',\App\Http\Controllers\Admin\Main\IndexController::class)->name('admin.main.index');
});

Route::group([ 'prefix' => 'posts'], function () {
    Route::get('/', \App\Http\Controllers\Admin\Post\IndexController::class)->name('admin.post.index');
    Route::get('/create', \App\Http\Controllers\Admin\Post\CreateController::class)->name('admin.post.create');
    Route::post('/', \App\Http\Controllers\Admin\Post\StoreController::class)->name('admin.post.store');
    Route::get('/{post}', \App\Http\Controllers\Admin\Post\ShowController::class)->name('admin.post.show');
    Route::get('/{post}/edit', \App\Http\Controllers\Admin\Post\EditController::class)->name('admin.post.edit');
    Route::patch('/{post}', \App\Http\Controllers\Admin\Post\UpdateController::class)->name('admin.post.update');
    Route::delete('/{post}', \App\Http\Controllers\Admin\Post\DeleteController::class)->name('admin.post.delete');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.category.index');
    Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
    Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
    Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('admin.category.show');
    Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
    Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
    Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DeleteController::class)->name('admin.category.delete');
});
