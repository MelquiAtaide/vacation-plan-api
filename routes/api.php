<?php

use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/event', [EventController::class, 'indexEvent']);
Route::post('/event', [EventController::class, 'createEvent']);
Route::get('/event/{id}', [EventController::class, 'showEvent']);
Route::put('/event/edit/{id}', [EventController::class, 'updateEvent']);
Route::delete('/event/delete/{id}', [EventController::class, 'deleteEvent']);