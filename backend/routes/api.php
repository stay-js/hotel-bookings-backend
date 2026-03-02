<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello from backend!']);
});

Route::apiResource('bookings', BookingController::class);
Route::apiResource('hotels', HotelController::class);
