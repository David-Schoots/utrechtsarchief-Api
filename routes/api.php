<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanoramaController;
use App\Http\Controllers\additionalinformationController;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 */
Route::get('/test', function () {
    return 'Hello World';
});


Route::get('/panorama', [PanoramaController::class, 'index']);

/* show specific panorama project */
Route::get('/panorama/{id}', [PanoramaController::class, 'show']);