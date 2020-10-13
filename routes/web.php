<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\location\RegionController;
use App\Http\Controllers\location\CityMunController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/users', [AdminController::class, 'index'])->name('users.index');
Route::get('/admin/user/{user}', [AdminController::class, 'show'])->name('user.show');

Route::get('/admin/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

Route::resource('regions', RegionController::class);
Route::resource('city-municipalities', CityMunController::class);
