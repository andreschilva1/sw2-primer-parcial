<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    use HasFactory;
    protected $table = 'enfermedades';
    //atributos
    protected $fillable = [
        'nombre',
        'descripcion',
        'especialidades_id',
    ];

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'especialidades_id' , 'id');
    }
}
