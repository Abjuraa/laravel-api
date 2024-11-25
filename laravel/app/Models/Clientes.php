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
<<<<<<< Updated upstream
        'email',
=======
        'apellido',
        'email',
        'telefono',
>>>>>>> Stashed changes
        'password',
    ];

    public function getAuthPassword()
    {
<<<<<<< Updated upstream
        return $this->password; 
=======
        return $this->password; // Especifica que este es el campo de la contraseña
>>>>>>> Stashed changes
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


