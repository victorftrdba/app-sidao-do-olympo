<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Site\HomeController;

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

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('site.home.index');
});

Route::prefix('/admin')->group(function () {

    Route::middleware(['auth'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::get('/postagens', [PostController::class, 'index'])->name('admin.posts.index');
        Route::get('/postagens/editar/{id}', [PostController::class, 'edit'])->name('admin.posts.edit');
    });

    Route::get('/login', [LoginController::class, 'index'])->name('admin.login.index');

});

Route::get('/robots.txt', 'RobotsController@index');