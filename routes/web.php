<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
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
use App\Http\Controllers\Admin\ProfileController;
Route::controller(ProfileController::class)->prefix('admin')->middleware('auth')->group(function() {
    Route::get('profile/create', 'add')->name('profile.add');
    Route::post('profile/create', 'create')->name('profile.create'); 
});
Route::controller(ProfileController::class)->prefix('admin')->group(function() {
    Route::get('profile/edit', 'edit')->name('profile.add');
    Route::post('profile/update', 'update')->name('profile.update');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\profileController::class, 'index'])->name('home');
