<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

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

    protected static function booted(){
        static::creating(function($student){
            $student->token = Str::random(80);
        });
    }
}
