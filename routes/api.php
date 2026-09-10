<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\SeniorCitizenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('senior-citizens', SeniorCitizenController::class);
    Route::apiResource('announcements', AnnouncementController::class);
    Route::apiResource('applications', ApplicationController::class);
});
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);