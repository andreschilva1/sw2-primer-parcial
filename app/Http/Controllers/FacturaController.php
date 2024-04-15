<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        // obtener fecha actual y hora actual con carbon 
        $fecha = Carbon::now();
        return view('factura.index', compact('fecha'));
    }


}
