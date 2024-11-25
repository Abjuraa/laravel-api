<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Clientes extends Authenticatable implements JWTSubject
{

    use Notifiable;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'email',
        'apellido',
        'email',
        'telefono',
        'password',
    ];

    public function getAuthPassword()
    {
        return $this->password; 
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}


