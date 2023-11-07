<?php

namespace App\Http\Controllers;

use App\Models\Terapia;
use Illuminate\Http\Request;

class TerapiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terapias = Terapia::all();
        return view('terapias.index', compact('terapias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'therapy' => 'required',
            'price' => 'required',
        ]);

        Terapia::create($request->all());
        return redirect()->route('terapias.index')->with('success', '');
    }

    /**
     * Display the specified resource.
     */
    public function show(Terapia $terapia)
    {
       
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $terapia = Terapia::find($id);
        return view('terapias.edit', compact('terapias'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'therapy' => 'required',
            'price' => 'required',
        ]);
    
        $terapia = Terapia::find($id);
    
        if (!$terapia) {
        
           
        } else {
            $terapia->therapy = $request->input('therapy');
            $terapia->price = $request->input('price');
            $terapia->save(); 
        }
    
        return redirect()->route('terapias.index', ['terapia' => $terapia->id]);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}