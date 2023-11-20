<?php

use App\Http\Controllers\admin\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    // Routes within the "admin" group
    Route::get('dashboard', [PostController::class,'dashboard'])->name('dasboard');

    Route::get('addcategory', [PostController::class,'addcategory'])->name('addcategory');

    // ... other admin routes
});

