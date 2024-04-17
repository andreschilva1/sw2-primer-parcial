<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    function index(){
        return view('ficha/index');
    }

    function create(Request $request){
        $especialidad = Especialidad::where('nombre', $request->input('especialidad'))->first();
        $especialidad -> load('doctorespecialidad');
        $doctorespecialidades = $especialidad -> doctorespecialidad;

        foreach ($doctorespecialidades as $doctor){
            $doctor -> load('doctor');
        }
        return view('ficha/create', ['especialidad' => $especialidad, 'doctores' => $doctorespecialidades]);
    }
}
