<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function listaPrv(){
        $proveedores = Proveedor::all();
        return view('proveedor', compact('proveedores'));
    }

    public function agregarPrv(){
        return view('agregarPrv');
    }

// Proveedores
// Id proveedor – int
// nombre – varchar
// fechaRegistro – date
// teléfono – varchar
// correo - varchar

    public function guardarPrv(Request $request){
        $Proveedor = new Proveedor();
        $Proveedor->idProveedor = $request->idProveedor;
        $Proveedor->nombre = $request->nombre;
        $Proveedor->fechaRegistro = $request->fechaRegistro;
        $Proveedor->telefono =$request->telefono;
        $Proveedor->correo = $request->correo;
        $Proveedor->save();

        return redirect('/proveedor');
    }
}
