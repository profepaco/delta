<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $categorias = Categoria::all();
        return view('categorias.index',['categorias'=>$categorias]);
    }

    public function create(){
       return view('categorias.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);

        Categoria::create($request->all());
        return redirect()->route('categorias.index')->with('msg','La categoria se registro correctamente');
    }
}
