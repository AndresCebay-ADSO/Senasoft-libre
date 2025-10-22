<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['booking_id', 'flight_id', 'passenger_id', 'seat_id', 'code', 'status'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function passenger()
    {
        // El tiquete está asignado a un pasajero específico.
        return $this->belongsTo(Passenger::class);
    }
}
