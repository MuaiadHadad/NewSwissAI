<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\homeController;
use Inertia\Inertia;

//index SwissAI Route
Route::get('/', [homeController::class, 'index'])->name('index');
Route::get('/index', [homeController::class, 'index'])->name('index');
//menu SwissAI Route
Route::get('/about', [homeController::class, 'about'])->name('about');
Route::get('/Service', [homeController::class, 'Service'])->name('service');
Route::get('/blog', [homeController::class, 'blog'])->name('blog');
Route::get('/contact', [homeController::class, 'contact'])->name('contact');
Route::get('/careers', [homeController::class, 'careers'])->name('careers');
Route::get('/careers/apply', [homeController::class, 'apply'])->name('apply');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('details');
//Post of SwissAI Route
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/careers/submit', [ApplicationController::class, 'store'])->name('careers.submit');
/*
 * Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 */
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
