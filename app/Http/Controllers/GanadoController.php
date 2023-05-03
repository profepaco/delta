<?php

namespace App\Http\Controllers;

use App\Models\Ganado;
use App\Models\Especie;
use App\Models\Productor;
use Illuminate\Http\Request;

class GanadoController extends Controller
{
    public function create(Productor $productore){
        $especies = Especie::all();
        return view('ganado.create',['productore'=>$productore,'especies'=>$especies]);
    }

    public function store(Request $request, Productor $productore){

        $this->validate($request,[
            'cantidad'=>'required|numeric'
        ]);
    
        $ganado = new Ganado;
        $ganado->productor_id = $productore->id;
        $ganado->especie_id = $request->especie_id;
        $ganado->cantidad = $request->cantidad;

        $ganado->save();
        //$productore = Productor::find($request->productor_id);
        return redirect()->route('productores.show',['productore'=>$productore]);
        
    }

    public function edit(Productor $productore, Ganado $ganado){
        $especies = Especie::all();
        return view('ganado.edit',['productore'=>$productore, 'ganado'=>$ganado, 'especies'=>$especies]);
    }

    public function update(Request $request, Ganado $ganado){

        $this->validate($request,[
            'cantidad'=>'required|numeric'
        ]);
        
        $ganado->especie_id = $request->especie_id;
        $ganado->cantidad = $request->cantidad;

        $ganado->save();

        return redirect()->route('productores.show',['productore'=>$ganado->productor]);
    }

    public function destroy(Ganado $ganado){
        $productore = $ganado->productor;
        $ganado->delete();
        return redirect()->route('productores.show',['productore'=>$productore]);
    }
}
