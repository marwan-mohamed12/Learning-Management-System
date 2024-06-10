<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Root Route
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('courses.index');
    }
    return redirect()->route('login');
});

// Authentication Required Routes
Route::middleware('auth')->group(function () {
    // Courses Routes
    Route::resource('courses', CourseController::class)->middleware('verified');

    // Email Verification Routes
    Route::prefix('email')->name('verification.')->group(function () {
        Route::get('verify', function () {
            return view('auth.verify-email');
        })->name('notice');

        Route::get('verify/{id}/{hash}', function (EmailVerificationRequest $request) {
            $request->fulfill();
            return redirect()->route('login');
        })->middleware('signed')->name('verify');

        Route::post('verification-notification', function (Request $request) {
            $request->user()->sendEmailVerificationNotification();
            return back()->with('status', 'verification-link-sent');
        })->middleware('throttle:6,1')->name('send');
    });
});

// Contact Routes
Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'show'])->name('show');
    Route::post('/', [ContactController::class, 'send'])->name('send');
});


require __DIR__ . '/auth.php';
