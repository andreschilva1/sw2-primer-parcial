<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $doctors =  [
            [
                "nombre" => "Dr. Ana García",
                "direccion" => "Consultorio A1",
                "telefono" => "+59170123456"
            ],
            [
                "nombre" => "Dr. Carlos Martínez",
                "direccion" => "Consultorio B2",
                "telefono" => "+59171234567"
            ],
            [
                "nombre" => "Dra. Laura Rodríguez",
                "direccion" => "Consultorio C3",
                "telefono" => "+59172345678"
            ],
            [
                "nombre" => "Dr. Javier López",
                "direccion" => "Consultorio D4",
                "telefono" => "+59173456789"
            ],
            [
                "nombre" => "Dra. María Pérez",
                "direccion" => "Consultorio E5",
                "telefono" => "+59174567890"
            ],
            [
                "nombre" => "Dr. Juan Martín",
                "direccion" => "Consultorio F6",
                "telefono" => "+59175678901"
            ],
            [
                "nombre" => "Dra. Ana Fernández",
                "direccion" => "Consultorio G7",
                "telefono" => "+59176789012"
            ],
            [
                "nombre" => "Dr. Luis Torres",
                "direccion" => "Consultorio H8",
                "telefono" => "+59177890123"
            ],
            [
                "nombre" => "Dra. Marta González",
                "direccion" => "Consultorio I9",
                "telefono" => "+59178901234"
            ],
            [
                "nombre" => "Dr. Pablo Sánchez",
                "direccion" => "Consultorio J10",
                "telefono" =>  "+59179012345"
            ]
        ];

        foreach ($doctors as $doctorData) {
            Doctor::create([
                'nombre' => $doctorData['nombre'],
                'direccion' => $doctorData['direccion'],
                'telefono' => $doctorData['telefono'],
            ]);
        }
    }
}
