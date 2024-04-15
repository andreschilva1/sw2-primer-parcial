<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    // Table Name
    protected $table = 'doctores';
    //atributos
    protected $fillable = [
        'nombre',
        'telefono',
    ];

    public function doctorEspecialidad()
    {
        return $this->hasMany(DoctorEspecialidad::class);
    }

}
