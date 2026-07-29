<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

# ---------- Admin ----------
// Route::middleware(['auth'])->group(function () {
//     Route::get('admin', [DashboardController::class, 'index'])->name('admin.dashboard');
//     Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
// });
Route::group([
    'as'            => 'admins.',
    'prefix'        => 'admin/',
    'middleware'    => ['auth']
], function () {
    Route::get('edit-profile', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('edit-profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::get('edit-password', [ProfileController::class, 'editPassword'])->name('password.edit');
    Route::put('edit-password', [ProfileController::class, 'updatePassword'])->name('password.update');

    //--------------------------------------------------------------------------

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('services', ServiceController::class);
    Route::get('services/service/search',[ServiceController::class , 'search'])
        ->name('services.search');
    Route::resource('areas',AreaController::class)->except(['show']);
    Route::resource('orders',OrderController::class)->only(['index','edit','update']);
    Route::resource('blogs',BlogController::class)->except(['show']);

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('contact-forms/index',[ContactFormController::class , 'index'])
        ->name('forms.index');

    Route::get('contact-forms/index/{id}',[ContactFormController::class , 'show'])
        ->name('forms.show');

    Route::delete('contact-forms/{id}/delete',[ContactFormController::class,'destroy'])
        ->name('forms.destroy');

});
