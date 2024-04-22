<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FichaController extends Controller
{
    function index()
    {
        return view('ficha/index');
    }

    function create(Request $request)
    {
        $especialidad = Especialidad::where('nombre', $request->input('especialidad'))->first();
        $especialidad->load('doctorespecialidad');
        $doctorespecialidades = $especialidad->doctorespecialidad;

        foreach ($doctorespecialidades as $doctor) {
            $doctor->load('doctor');
        }
        return view('ficha/create', ['especialidad' => $especialidad, 'doctores' => $doctorespecialidades]);
    }



    function analizarImagen(Request $request)
    {
        //Log::info('Recibiendo imagen');
        $imagenCodificada = $request->input('imagen');
        //Log::info($imagenCodificada);
        // Decodificar la imagen base64 y guardarla en tu servidor, por ejemplo:
        $imagenDecodificada = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagenCodificada));

        // Guarda la imagen en el servidor
        /* $nombreImagen = 'imagen'.time().'.png';
        file_put_contents(public_path('img/'.$nombreImagen), $imagenDecodificada); */




        return response()->json(['succes' => 'Imagen recibida']);
    }
}
