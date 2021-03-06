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

use App\Http\Controllers\pageController;

Route::get('/', [pageController::class, 'home'])->middleware('auth');

Route::get('/news', [pageController::class, 'news']);

Route::get('/terms', [pageController::class, 'terms']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('myprofile');
})->middleware(['auth'])->name('myprofile');

Route::get('/profile/edit', function () {
    return view('myprofile');
})->middleware(['auth'])->name('myprofile');

Route::get('/profile/{userid}', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');


require __DIR__.'/auth.php';
