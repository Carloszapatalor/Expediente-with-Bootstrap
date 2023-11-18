<?php

namespace App\Http\Controllers;

use App\Models\Modalidad;
use Illuminate\Http\Request;

class ModalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modalidades = Modalidad::all();
        return view("modalidades.index", compact("modalidades"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_mod' => 'required'
        ]);

        Modalidad::create($request->all());
        return redirect()->route('modalidad.index')->with('success', '');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modalidad $modalidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name_mod' => 'required'
        ]);
        

        $modalidad = Modalidad::find($id);

        if (!$modalidad) {
        } else {
            $modalidad->name_mod = $request->input('name_mod');
            $modalidad->save();
        }

        return redirect()->route('modalidad.index', ['modalidad' => $modalidad->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modalidades = Modalidad::find($id);
        $modalidades->delete();
        return redirect()->route('modalidad.index')->with('success', 'Terapia eliminada exitosamente');
    }
}