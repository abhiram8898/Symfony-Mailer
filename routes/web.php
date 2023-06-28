<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\UserControllerMail;
Route::get('/partner-with-us', 'App\Http\Controllers\PageController@partner_with_us')->name('partner-with-us');
Route::get('/career-opportunities', 'App\Http\Controllers\PageController@career_opportunities')->name('career-opportunities');
// Route::get('/send-welcome-email', [UserControllerMail::class, 'sendWelcomeEmail'])->name('send.welcome.email');

use App\Http\Controllers\MailController;

Route::post('/send-email', [MailController::class, 'sendEmail'])->name('sendEmail');
Route::post('/email', [MailController::class, 'Email'])->name('Email');

