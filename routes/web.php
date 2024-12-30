<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoodTrackerController;
use Illuminate\Support\Facades\Route;

// Routes for static pages
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authentication routes
Auth::routes();

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

// Protected routes (require authentication)
Route::middleware('auth')->group(function () {
    Route::get('/consult', [HomeController::class, 'consult'])->name('consult');
    Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
    Route::get('/mood-tracker', [MoodTrackerController::class, 'index'])->name('mood-tracker.index');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::post('/logout', [HomeController::class, 'logout']); //->name('logout');

    // Mood Tracker routes
    Route::post('/mood-tracker/save', [MoodTrackerController::class, 'store'])->name('mood-tracker.save');
});

Route::middleware('auth')->group(function () {
    Route::get('/mood-tracker', [MoodTrackerController::class, 'index'])->name('mood-tracker.index');
    Route::post('/mood-tracker/save', [MoodTrackerController::class, 'store'])->name('mood-tracker.save');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
});

Route::middleware('auth')->get('/profile', [MoodTrackerController::class, 'profile'])->name('profile');

Route::get('/profile/clear-mood-history', [MoodTrackerController::class, 'clearMoodHistory'])->name('clear-mood-history');

// routes/web.php

use App\Http\Controllers\PaymentController;

Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');