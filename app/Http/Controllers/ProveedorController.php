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
        $empleado = new Proveedor();
        $empleado->idProveedor = $request->idProveedor;
        $empleado->nombre = $request->nombre;
        $empleado->fechaRegistro = $request->fechaRegistro;
        $empleado->telefono =$request->telefono;
        $empleado->correo = $request->correo;
        $empleado->save();

        return redirect('/proveedor');
    }
}
