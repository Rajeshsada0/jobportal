<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ApplicationController;



Route::get('/dashboard', [PublicController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/jobs/{job}', [PublicController::class, 'show'])->name('jobs.show');
Route::post('/apply/{job}', [ApplicationController::class, 'apply'])->name('jobs.apply');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('jobs', JobController::class);
    Route::get('jobs/{job}/applicants', [JobController::class, 'applicants'])->name('jobs.applicants');
    Route::get('applicant-list', [JobController::class, 'applicantlist'])->name('applicantlist');
});

require __DIR__ . '/auth.php';
