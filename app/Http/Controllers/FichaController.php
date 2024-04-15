<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FichaController extends Controller
{
    function index(){
        return view('ficha/index');
    }

    function create(){
        return view('ficha/create');
    }
}
