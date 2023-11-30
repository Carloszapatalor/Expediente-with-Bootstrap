<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Modalidad;
use Illuminate\Http\Request;
use App\Models\Terapia;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

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

    // public function citas(){
    //     $citas = Cita::all();
    //     return datatables()
    //     ->collection($citas)
    //     ->addColumn('btn','citas.actions')
    //     ->rawColumns (['btn'])
    //     ->toJson();
    // }

    public function roles(){
        $roles = Role::with('permissions')->get();
        return DataTables::of($roles)
             ->addColumn('btn', function ($role) {
                return view('roles.actions', compact('role'));
            })
            ->rawColumns(['btn'])
            ->toJson();
    }

        // public function roles(){
        //     $roles = Role::with('permissions')->get();
        //     $dataTable = datatables()
        //         ->collection($roles)
        //         ->addColumn('btn','roles.actions')
        //         ->rawColumns(['btn'])
        //         ->toJson();
        
        //     return view('roles.actions', compact('dataTable'));
        // }
    
    
}