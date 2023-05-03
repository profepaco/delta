<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
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
        $especies = Especie::all();
        return view('especies.index',['especies'=>$especies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('especies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);

        Especie::create($request->all());
        return redirect()->route('especies.index')->with('msg','La especie se registro correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Especie $especy)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Especie $especy)
    {
        return view('especies.edit',['especy'=>$especy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especie $especie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especie $especie)
    {
        //
    }
}
