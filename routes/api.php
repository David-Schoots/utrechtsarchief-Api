<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanoramaController;
use App\Http\Controllers\additionalinformationController;
use App\Http\Middleware\SuperAdminMiddleware;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 */
Route::get('/test', function () {
    return 'Hello World';
});

// Public read-only routes
Route::get('/panorama', [PanoramaController::class, 'index']);
Route::get('/panorama/{id}', [PanoramaController::class, 'show']);

Route::middleware(['auth:sanctum', 'superadmin'])->group(function () {
    Route::post('/panorama', [PanoramaController::class, 'store']);
    Route::put('/panorama/{id}', [PanoramaController::class, 'update']);
    Route::delete('/panorama/{id}', [PanoramaController::class, 'destroy']);
}); 