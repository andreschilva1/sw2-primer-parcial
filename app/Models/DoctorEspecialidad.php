<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorEspecialidad extends Model
{
    use HasFactory;

    protected $table = 'doctores_especialidades';

    protected $fillable = [
        'doctores_id',
        'especialidades_id',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }
}
