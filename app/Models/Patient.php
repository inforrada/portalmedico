<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido1', 'apellido2', 'email'];
    // protected $guard = ['id']
    public function appointments () {
        return $this->hasMany(Appointment::class);
        ///Para relaciones 1:1 return $this->hasOne(Appointment::class);
    }

    public function doctors () {
        return $this->belongsToMany(Doctor::class);
    }
}
