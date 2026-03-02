<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    protected $table = 'hotels';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'address',
        'rating',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
