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
    if (Auth::user()) {
        return redirect()->route('login');
    } else {
        return redirect()->route('login');
    }
});

Route::get('/dashboard', \App\Http\Controllers\DashboardController::class, 'index')->middleware('auth');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [\App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [\App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{blog}/edit', [\App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{blog}', [\App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{blog}', [\App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.destroy');

    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.index');
    Route::put('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});



