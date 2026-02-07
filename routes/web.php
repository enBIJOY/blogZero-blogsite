<?php

use App\Http\Controllers\frontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.index');
});


//Start Breeze Route

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//End Breeze Route


Route::get('about',[frontendController::class, 'about'])->name('about');
Route::get('newsletter',[frontendController::class, 'newsletter'])->name('newsletter');
Route::get('blog',[frontendController::class, 'blog'])->name('blog');
Route::get('skills',[frontendController::class, 'skills'])->name('skills');
Route::get('contact',[frontendController::class, 'contact'])->name('contact');
Route::get('privecyPolicy',[frontendController::class, 'privecyPolicy'])->name('privecyPolicy');
