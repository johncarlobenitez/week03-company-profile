<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Welcome / Landing Page
Route::get('/', [CompanyController::class, 'welcome'])->name('welcome');

// Main Company Homepage
Route::get('/company', [CompanyController::class, 'home'])->name('company');

// About
Route::get('/about', [CompanyController::class, 'about'])->name('about');

// Services
Route::get('/services', [CompanyController::class, 'services'])->name('services');

// Contact
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');

// Contact Form Submission
Route::post('/contact', [CompanyController::class, 'store'])->name('contact.store');