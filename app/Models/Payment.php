<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['booking_id', 'price', 'method', 'date'];

    public function booking()
    {
        // Un pago pertenece a una única reserva (relación OneToOne).
        return $this->belongsTo(Booking::class);
    }
}
