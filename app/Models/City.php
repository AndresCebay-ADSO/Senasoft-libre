<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'iata_code'];

    public function departingFlights()
    {
        // Vuelos que tienen esta ciudad como origen
        return $this->hasMany(Flight::class, 'origin_city_id');
    }

    public function arrivingFlights()
    {
        // Vuelos que tienen esta ciudad como destino
        return $this->hasMany(Flight::class, 'destination_city_id');
    }
}
