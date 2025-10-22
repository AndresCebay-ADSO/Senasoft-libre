<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['identifier', 'origin_city_id', 'destination_city_id', 'departure', 'arrival', 'status'];

    public function originCity()
    {
        return $this->belongsTo(City::class, 'origin_city_id');
    }

    public function destinationCity()
    {
        return $this->belongsTo(City::class, 'destination_city_id');
    }

    public function tickets()
    {
        // Un vuelo tiene muchos tiquetes vendidos.
        return $this->hasMany(Ticket::class);
    }
    
    // Método clave para el control de capacidad (NO HAY CAMPO 'available')
    public function seatsAvailable(Plane $plane)
    {
        $occupied = $this->tickets()->count();
        return $plane->capacity - $occupied;
    }  
}
