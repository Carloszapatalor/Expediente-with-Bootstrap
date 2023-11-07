<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terapia;

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
}