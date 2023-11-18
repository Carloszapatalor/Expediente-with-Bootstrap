<?php

namespace App\Http\Controllers;

use App\Models\Modalidad;
use Illuminate\Http\Request;
use App\Models\Terapia;
use App\Models\User;

class DatatableController extends Controller
{
    public function terapias(){
        $terapias = Terapia::all();
        return datatables()
        ->collection($terapias)
        ->addColumn('btn', 'terapias.actions')
        ->rawColumns(['btn'])
        ->toJson(); 
    }

    public function modalidades(){
        $modalidades = Modalidad::all();
        return datatables()
        ->collection($modalidades)
        ->addColumn('btn', 'modalidades.actions')
        ->rawColumns(['btn'])
        ->toJson(); 
    }

    public function usuarios(){
        $usuarios = User::all();
        return datatables()
        ->collection($usuarios)
        ->addColumn('btn', 'usuarios.actions')
        ->rawColumns(['btn'])
        ->toJson(); 
    }

    public function citas(){
        $citas = Citas::all();
        return datatables()
        ->collection($citas)
        ->addColumn('btn','citas.actions')
        ->rawColumns (['btn'])
        ->toJson();
    }
    
}