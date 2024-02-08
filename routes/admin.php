<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');
//Route::post('/password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('password');
Route::resource('/admin-users', App\Http\Controllers\Backend\ACL\UsersController::class)->only(['index','store','edit','update','destroy']);
//  ACL routes
Route::resource('/modules', App\Http\Controllers\Backend\ACL\ModuleController::class)->only(['index','store','update']);
Route::resource('/permission', App\Http\Controllers\Backend\ACL\PermissionController::class)->only(['index','store','update']);
Route::resource('/roles', App\Http\Controllers\Backend\ACL\RoleController::class)->only(['index', 'store', 'edit', 'update']);
Route::post('/assign-permission/{id}', [App\Http\Controllers\Backend\ACL\RoleController::class, 'assignPer']);
// System Setup
Route::resource('/system-setup', App\Http\Controllers\Backend\SystemSetup\SystemSetupController::class)->only(['index','update']);
// Website
Route::resource('/content-category', App\Http\Controllers\Backend\Website\CategoryController::class)->only(['index','store','update']);
Route::resource('/content-information', App\Http\Controllers\Backend\Website\ContentsController::class)->only(['index','show','store','edit','update']);
Route::resource('/gallery-category', App\Http\Controllers\Backend\Gallery\GalleryCategoryController::class)->only(['index','store','update']);
Route::resource('/gallery', App\Http\Controllers\Backend\Gallery\GalleryController::class)->only(['index','show','store','destroy']);
Route::post('/google-image-id-update/{id}', [App\Http\Controllers\Backend\Website\ContentsController::class, 'googleIdUpdate']);
// Marketing
Route::resource('/marketing-settings', App\Http\Controllers\Backend\Marketing\MarketingSettingsController::class)->only(['index','store']);
Route::resource('/targeted-audience', App\Http\Controllers\Backend\Marketing\TargetedAudienceController::class)->only(['index','store','update']);
Route::resource('/message-template', App\Http\Controllers\Backend\Marketing\MessageController::class)->only(['index','store','update']);

// Cascading Dropdown
Route::post('api/fetch-cities', [App\Http\Controllers\Backend\Marketing\TargetedAudienceController::class, 'fetchCity']);