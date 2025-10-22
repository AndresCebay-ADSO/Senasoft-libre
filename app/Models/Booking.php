<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Asegúrate de incluir todos los campos 'payer' y 'price_total'
    protected $guarded = ['id']; // Permite asignación masiva para todos excepto 'id'

    public function user()
    {
        // Un Booking puede pertenecer a un usuario (nullable)
        return $this->belongsTo(User::class);
    }

    public function passengers()
    {
        // Una reserva tiene de 1 a 5 pasajeros.
        return $this->hasMany(Passenger::class);
    }

    public function tickets()
    {
        // Una reserva genera varios tiquetes.
        return $this->hasMany(Ticket::class);
    }

    public function payment()
    {
        // Una reserva tiene exactamente un pago.
        return $this->hasOne(Payment::class);
    }
}
