<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicosMVZ;
use App\Clientes;

class ingresoController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
      $medicos = medicosMVZ::all();
      $clientes = Clientes::all();
      return view('ingreso.index')->with(compact('medicos','clientes'));
    }

    public function jsonmedicos($id)
    {
      $medicosDatos = medicosMVZ::find($id);
      return response()->json(
        $medicosDatos->toArray()
      );
    }

}
