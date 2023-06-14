<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index',['servicios'=>$servicios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('servicios.create',['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion'=>'required',
            'categoria_id'=>'required'
        ]);
        
        $servicio = new Servicio;
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->categoria_id = $request->categoria_id;

        $servicio->save();

        return redirect()->route('servicios.index')->with('msg','Servicio creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        $categorias = Categoria::all();
        return view('servicios.edit',['servicio'=>$servicio,'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        
        $request->validate([
            'nombre' => 'required',
            'descripcion'=>'required',
            'categoria_id'=>'required'
        ]);
        
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->categoria_id = $request->categoria_id;

        $servicio->save();

        return redirect()->route('servicios.index')->with('msg','Servicio creado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        //
    }
}
