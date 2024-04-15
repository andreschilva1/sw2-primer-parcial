<?php

namespace Database\Seeders;

use App\Models\Enfermedad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnfermedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Enfermedad::create([
            'nombre' => 'sarampion',
            'descripcion' => 'enfermedad viral',
            'especialidades_id'=> '1'
        ]);

        Enfermedad::create([
            'nombre' => 'conjuntivitis',
            'descripcion' => 'inflamacion de la conjuntiva',
            'especialidades_id'=> '2'
        ]);

        Enfermedad::create([
            'nombre' => 'quemadura',
            'descripcion' => 'lesion en la piel',
            'especialidades_id'=> '3'
        ]);
    }
}
