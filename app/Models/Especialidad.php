<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    protected $table = 'especialidades';
    //atributos
    protected $fillable = [
        'nombre',
    ];

    public function doctorEspecialidad()
    {
        return $this->hasMany(DoctorEspecialidad::class);
    }
}
