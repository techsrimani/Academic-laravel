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
    return view('homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'create'])->name('contact-us');
Route::get('/contact-requests', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-requests');
Route::post('/contact-us', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact-us');
