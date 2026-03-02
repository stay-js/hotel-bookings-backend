<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateBookingRequest;
use App\Http\Resources\BookingResource;
use App\Models\Booking;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingController extends Controller
{
    public function index(): JsonResource
    {
        return BookingResource::collection(Booking::all()->load('hotel'));
    }

    public function show(Booking $booking): JsonResource
    {
        return new BookingResource($booking->load('hotel'));
    }

    public function store(StoreUpdateBookingRequest $request): JsonResource
    {
        $data = $request->validated();
        $booking = Booking::create($data);

        return new BookingResource($booking->load('hotel'));
    }

    public function update(StoreUpdateBookingRequest $request, Booking $booking): JsonResource
    {
        $data = $request->validated();
        $booking->update($data);

        return new BookingResource($booking->load('hotel'));
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return response()->noContent();
    }
}
