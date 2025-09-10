<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function() {
    return view('about-us');
})->name('about');

Route::get('/daily-plan', function() {
    return view('daily-plan');
})->name('plan');

Route::get('/camp-details', function() {
    return view('camp-details');
})->name('details');

Route::get('/daily-workshops', function() {
    return view('daily-workshops');
})->name('workshops');

Route::get('/faq', function() {
    return view('faq');
})->name('faq');

Route::get('/contact-us', [ContactController::class, 'show'])->name('contact.show');
Route::post('/send-contact-info', [ContactController::class, 'sendMail'])->name('contact.send');
Route::get('/camp-registration', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register-submit', [RegisterController::class, 'submitRegister'])->name('register.submit');
Route::get('/camp-register/success', [RegisterController::class, 'purchaseSuccess'])->name('purchase.success');
