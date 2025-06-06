<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\Admin\RequestController as AdminRequestController;
use App\Http\Controllers\Admin\TeacherController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/request', [RequestController::class, 'store'])->name('request.store');

Route::middleware( ['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminRequestController::class, 'index'])->name('admin.requests');
    Route::get('/requests', [AdminRequestController::class, 'index'])->name('admin.requests');
    Route::delete('/requests/{id}', [AdminRequestController::class, 'destroy'])->name('admin.requests.destroy');
    Route::post('/requests/{id}/mark-done', [AdminRequestController::class, 'markDone'])->name('admin.requests.markDone');
    
    Route::get('/teachers', [TeacherController::class, 'index'])->name('admin.teachers.index');
    Route::get('/teachers/create', [TeacherController::class, 'create'])->name('admin.teachers.create');
    Route::post('/teachers/store', [TeacherController::class, 'store'])->name('admin.teachers.store');
});

require __DIR__.'/auth.php';
