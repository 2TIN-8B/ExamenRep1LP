<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function listaEmp(){
        $empleados = Empleado::all();
        return view('empleado', compact('empleados'));
    }

    public function agregarEmp(){
        return view('agregarEmp');
    }

// Empleado
// Id préstamo – int
// nombre – varchar
// apellido – varchar
// fechaIngreso – date
// salario – double 

    public function guardarEmp(Request $request){
        $empleado = new Empleado();
        $empleado->idPrestamo = $request->idPrestamo;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->fechaIngreso =$request->fechaIngreso;
        $empleado->salario = $request->salario;
        $empleado->save();

        return redirect('/empleado');
    }
}
