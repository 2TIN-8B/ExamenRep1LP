<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function listaPro(){
        $productos = Producto::all();
        return view('producto', compact('productos'));
    }

    public function agregarPro(){
        return view('agregarPro');
    }

// Producto:
// Id – int - identity - Primary Key
// descripcion – varchar
// precio – double
// stock – int
// pagaIsv – boolean

    public function guardarPro(Request $request){
        $producto = new Producto();
        $producto->id = $request->id;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock =$request->stock;
        $producto->pagaIsv = $request->pagaIsv;
        $producto->save();

        return redirect('/producto');
    }
}
