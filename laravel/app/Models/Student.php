<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use hasFactory;

    protected $table = 'student';

    protected $fillable = [
        'nombre',
        'email',
        'phone',
        'language'
    ];
}
