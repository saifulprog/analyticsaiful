<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('/');
Route::get('my-works', [App\Http\Controllers\Frontend\FrontendController::class, 'portfolio'])->name('my-works');
Route::get('blog/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'blogs'])->name('blog');
Route::get('blog-details/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'blogDetails'])->name('blog-details');
Route::get('/about', function () {return redirect('/'.'#about');});
Route::get('/service', function () {return redirect('/'.'#service');});
Route::get('/testimonial', function () {return redirect('/'.'#testimonial');});
Route::get('/contacts', function () {return redirect('/'.'#contact');});
Route::post('contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contactStore'])->name('contact');