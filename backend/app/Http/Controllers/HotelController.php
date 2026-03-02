<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateHotelRequest;
use App\Http\Resources\HotelResource;
use App\Models\Hotel;
use Illuminate\Http\Resources\Json\JsonResource;

class HotelController extends Controller
{
    public function index(): JsonResource
    {
        return HotelResource::collection(Hotel::all()->load('bookings'));
    }

    public function show(Hotel $hotel): JsonResource
    {
        return new HotelResource($hotel->load('bookings'));
    }

    public function store(StoreUpdateHotelRequest $request): JsonResource
    {
        $data = $request->validated();
        $booking = Hotel::create($data);

        return new HotelResource($booking->load('bookings'));
    }

    public function update(StoreUpdateHotelRequest $request, Hotel $hotel): JsonResource
    {
        $data = $request->validated();
        $hotel->update($data);

        return new HotelResource($hotel->load('bookings'));
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return response()->noContent();
    }
}
