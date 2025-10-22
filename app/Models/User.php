<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class User extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
        'lastname',
        'doc_type',
        'identity',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function bookings()
    {
        // Un usuario puede tener muchas reservas (relación opcional, nullable FK).
        return $this->hasMany(Booking::class);
    }
}
