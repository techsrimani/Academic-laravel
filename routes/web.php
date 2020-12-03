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

//contact us

Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'create'])->name('contact-us');
Route::get('/contact-requests', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-requests')->middleware('auth');;
Route::post('/contact-us', [App\Http\Controllers\ContactUsController::class, 'store']);
Route::get('/contact-reply/{id}', [App\Http\Controllers\ContactUsController::class, 'replyView'])->name('contact.reply');

//jobs
Route::get('/apply-job', [App\Http\Controllers\JobsSubmissionController::class, 'create'])->name('apply-job');
Route::post('/apply-job', [App\Http\Controllers\JobsSubmissionController::class, 'store']);

Route::get('/job-applications', [App\Http\Controllers\JobsSubmissionController::class, 'index']);
Route::get('/applicant-details/{id}', [App\Http\Controllers\JobsSubmissionController::class, 'applicantDetails'])->name('applicant-details');

