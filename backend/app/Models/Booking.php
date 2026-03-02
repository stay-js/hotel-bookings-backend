<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $table = 'bookings';

    public $timestamps = true;

    protected $fillable = [
        'hotel_id',
        'name',
        'check_in',
        'check_out',
        'number_of_guests',
        'type',
    ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
}
