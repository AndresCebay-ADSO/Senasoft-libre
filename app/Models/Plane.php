<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $fillable = ['model', 'capacity'];

    public function seats()
    {
        // Un avión tiene muchos asientos definidos por su modelo.
        return $this->hasMany(Seat::class);
    }
}
