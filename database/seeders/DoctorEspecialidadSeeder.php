<?php

namespace Database\Seeders;

use App\Models\DoctorEspecialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorEspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DoctorEspecialidad::create([
            'doctores_id' => 1,
            'especialidades_id' => 1,
        ]);
        DoctorEspecialidad::create([
            'doctores_id' => 2,
            'especialidades_id' => 1,
        ]);
        DoctorEspecialidad::create([
            'doctores_id' => 3,
            'especialidades_id' => 1,
        ]);
        DoctorEspecialidad::create([
            'doctores_id' => 4,
            'especialidades_id' => 2,
        ]);
        DoctorEspecialidad::create([
            'doctores_id' => 5,
            'especialidades_id' => 2,
        ]);
        DoctorEspecialidad::create([
            'doctores_id' => 6,
            'especialidades_id' => 2,
        ]);
        DoctorEspecialidad::create([
            'doctores_id' => 7,
            'especialidades_id' => 3,
        ]);
        DoctorEspecialidad::create([
            'doctores_id' => 8,
            'especialidades_id' => 3,
        ]);
        DoctorEspecialidad::create([
            'doctores_id' => 9,
            'especialidades_id' => 3,
        ]);
        DoctorEspecialidad::create([
            'doctores_id' => 10,
            'especialidades_id' => 2,
        ]);
    }
}
