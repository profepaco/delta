<?php

namespace App\Http\Controllers;

use App\Models\Productor;
use App\Models\Propiedad;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    public function create(Productor $productore){
        return view('propiedades.create',['productore'=>$productore]);
    }

    public function store(Request $request, Productor $productore){

        $this->validate($request,[
            'lugar'=>'required',
            'tipo_tenencia'=>'required',
            'superficie'=>'required|numeric'
        ]);

        $propiedad = new Propiedad;
        $propiedad->productor_id = $productore->id;
        $propiedad->lugar = $request->lugar;
        $propiedad->tipo_tenencia = $request->tipo_tenencia;
        $propiedad->superficie = $request->superficie;

        $propiedad->save();

        return redirect()->route('productores.show',['productore'=>$productore]);
    }

    public function edit(Productor $productore, Propiedad $propiedad){
        return view('propiedades.edit',['productore'=>$productore,'propiedad'=>$propiedad]);
    }

    public function update(Request $request, Propiedad $propiedad){

        $this->validate($request,[
            'lugar'=>'required',
            'tipo_tenencia'=>'required',
            'superficie'=>'required|numeric'
        ]);

        $propiedad->lugar = $request->lugar;
        $propiedad->tipo_tenencia = $request->tipo_tenencia;
        $propiedad->superficie = $request->superficie;

        $propiedad->save();

        return redirect()->route('productores.show',['productore'=>$propiedad->productor]);
    }

    public function destroy(Propiedad $propiedad){
        $productore = $propiedad->productor;
        $propiedad->delete();
        return redirect()->route('productores.show',['productore'=>$productore]);
    }
}
