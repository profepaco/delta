<?php

namespace App\Http\Controllers;

use App\Models\Patente;
use App\Models\Productor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PatenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Productor $productore)
    {
        return view('patentes.create',['productore'=>$productore]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Productor $productore)
    {
        $request->validate([
            'imagen' => 'required|mimes:jpeg,jpg',
            'libro'=>'required',
            'foja'=>'required'
        ]);

        $nombre_imagen = 'patente'.Str::uuid().'.'.$request->imagen->extension();  

        $request->imagen->move(public_path('uploads'), $nombre_imagen);

        $patente = new Patente;
        $patente->productor_id = $productore->id;
        $patente->imagen = $nombre_imagen;
        $patente->libro = $request->libro;
        $patente->foja = $request->foja;

        $patente->save();

        return redirect()->route('productores.show',['productore'=>$productore]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patente $patente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patente $patente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patente $patente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patente $patente)
    {
        //
    }
}
