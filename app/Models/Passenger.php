<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    // Usar guarded si incluyes todos los campos en fillable para simplificar
    protected $guarded = ['id']; 

    public function booking()
    {
        // Un pasajero pertenece a una única reserva.
        return $this->belongsTo(Booking::class);
    }

    public function ticket()
    {
        // Un pasajero tiene un tiquete.
        return $this->hasOne(Ticket::class);
    }
}
