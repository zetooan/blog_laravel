<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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
    return view('home', ['hal' => 'Home']);
});
Route::get('/blog',  [BlogController::class, 'index']);
Route::get('/categories',  [BlogController::class, 'categories']);
Route::get('/author',  [BlogController::class, 'author']);
Route::get('/post/{slug:slug}',  [BlogController::class, 'show']);
Route::get('/about', function () {
    return view('about', ['hal' => 'About']);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'masuk'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard/awal', [
        'hal' => 'Dashboard'
    ]);
})->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
