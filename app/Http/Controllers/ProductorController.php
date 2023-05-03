<?php

namespace App\Http\Controllers;

use App\Models\Productor;
use Illuminate\Http\Request;

class ProductorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productores = Productor::all();
        return view('productores.index',['productores'=>$productores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,[
            'RFC'=>'required|max:13',
            'CURP'=>'required',
            'INE'=>'required',
            'nombre'=>'required',
            'apellidos'=>'required',
            'domicilio'=>'required',
            'UPP'=>'required',
            'telefono'=>'required',
            'esSocio'=>'required'
        ]);      
        
        Productor::create($request->all());
        
        return redirect()->route('productores.index')->with('msg','Productor creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productor $productore)
    {
        return view('productores.show',['productore'=>$productore]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productor $productore)
    {
        return view('productores.edit',['productore'=>$productore]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productor $productore)
    {
        $this->validate(
            $request,[
            'RFC'=>'required|max:13',
            'CURP'=>'required',
            'INE'=>'required',
            'nombre'=>'required',
            'apellidos'=>'required',
            'domicilio'=>'required',
            'UPP'=>'required',
            'telefono'=>'required',
            'esSocio'=>'required'
        ]);    
        
        $productore->RFC = $request->RFC;
        $productore->CURP = $request->CURP;
        $productore->INE = $request->INE;
        $productore->nombre = $request->nombre;
        $productore->apellidos = $request->apellidos;
        $productore->domicilio = $request->domicilio;
        $productore->UPP = $request->UPP;
        $productore->esSocio = $request->esSocio;
        $productore->telefono = $request->telefono;
        
        $productore->save();

        return redirect()->route('productores.index')->with('msg','Los datos del productor se actualizaron correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productor $productor)
    {
        
    }
}
