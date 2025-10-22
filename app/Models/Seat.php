<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['plane_id', 'class', 'code'];

    public function plane()
    {
        // Un asiento pertenece a un modelo de avión.
        return $this->belongsTo(Plane::class);
    }

    public function tickets()
    {
        // Un asiento puede estar en muchos tiquetes (en diferentes vuelos).
        return $this->hasMany(Ticket::class);
    }
}
