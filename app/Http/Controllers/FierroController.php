<?php

namespace App\Http\Controllers;

use App\Models\Fierro;
use App\Models\Productor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FierroController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Productor $productore)
    {
        $request->validate([
            'imagen' => 'required|mimes:jpeg,jpg',
            'patente_id'=>'required',
        ]);

        $nombre_imagen = 'patente'.Str::uuid().'.'.$request->imagen->extension();  

        $request->imagen->move(public_path('uploads'), $nombre_imagen);

        $fierro = new Fierro;

        $fierro->patente_id = $request->patente_id;
        $fierro->imagen = $nombre_imagen;

        $fierro->save();
        return redirect()->route('productores.show',['productore'=>$productore]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Fierro $fierro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fierro $fierro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fierro $fierro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fierro $fierro)
    {
        //
    }
}
