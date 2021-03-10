<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('api')->group(function () {
    Route::resource('resume', ResumeController::class);
    Route::post('active/{id}',   [ResumeController::class, 'active'])->name('active');
    Route::get('/my-resume',   [ResumeController::class, 'getResume'])->name('getResume');
});
