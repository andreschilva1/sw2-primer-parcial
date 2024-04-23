<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Enfermedad;
use App\Models\Especialidad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class FichaController extends Controller
{
    function index()
    {
        return view('ficha/index');
    }

    function create(Request $request)
    {
        //dd($request);

        $enfermedad = $request->input('enfermedad');
        $enfermedad = Enfermedad::where('nombre',$enfermedad )->first();
        $especialidad = $enfermedad->especialidad;
        $especialidad->load('doctorEspecialidad');
        $doctorespecialidades = $especialidad->doctorespecialidad;

        foreach ($doctorespecialidades as $doctor) {
            $doctor->load('doctor');
        }

        /* dd($doctorespecialidades); */
        return view('ficha/create', ['especialidad' => $especialidad, 'doctores' => $doctorespecialidades]);
    }

    function store(Request $request)
    {
        // Verificar si se envió una imagen
        if ($request->hasFile('image')) {
            // Obtener la imagen enviada
            $image = $request->file('image');

            // Guardar la imagen en el directorio de almacenamiento
            $path = $image->store('images');

            // Aquí puedes hacer más procesamiento si es necesario

            // Retornar una respuesta, si es necesario
            return response()->json(['message' => 'Imagen almacenada correctamente', 'path' => $path]);
        } else {
            return response()->json(['error' => 'No se envió ninguna imagen'], 400);
        }
    }

    function analizarImagen(Request $request)
    {
        // Obtener la imagen codificada en base64 de la solicitud
        $imagenCodificada = $request->input('imagen'); // Cambiar 'imagen' a 'image'

        // Decodificar la imagen base64
        $imagenDecodificada = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagenCodificada));

        // URL de destino
        $url = 'http://127.0.0.1:5000/detect';

        // Crear el cuerpo de la solicitud
        $body = [
            'image' => $imagenCodificada
        ];

        // Realizar la solicitud POST
        $response = Http::post($url, $body);


        // Obtener la respuesta
        $response = $response->json();

        // Guardar la imagen en el servidor
        $nombreImagen = 'imagen' . time() . '.png';
        file_put_contents(public_path('img/' . $nombreImagen), $imagenDecodificada);

        // Retornar una respuesta con la ruta de la imagen almacenada y el resultado del análisis
        return response()->json(['message' => 'Imagen almacenada correctamente', 'path' => $nombreImagen, 'analysis' => $response]);
    }

    function imprimir(Request $request)
    {
        $doctor = Doctor::find($request->doctor_id);
        $especialidad = Especialidad::find($doctor->doctorEspecialidad->first()->especialidades_id);
        $fecha = Carbon::now();
        return view('ficha.imprimir', compact('fecha', 'doctor', 'especialidad'));
    }
}
