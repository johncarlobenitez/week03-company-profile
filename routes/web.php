<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CompanyController::class, 'home'])->name('company');

Route::get('/about', [CompanyController::class, 'about'])->name('about');

Route::get('/services', [CompanyController::class, 'services'])->name('services');

Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
Route::post('/contact', [CompanyController::class, 'store'])->name('contact.store');