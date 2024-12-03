<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/dashboard/statistics', 'DashboardController@statistics')->middleware('auth')->name('dashboard.statistics');

Route::get('/profile/edit', 'ProfileController@edit')->middleware('auth')->name('profile.edit');
Route::post('/profile/update', 'ProfileController@update')->middleware('auth')->name('profile.update');