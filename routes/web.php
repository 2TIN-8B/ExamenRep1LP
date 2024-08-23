<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Menu
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
//-------------------------------------------------------------------------------------------

//Producto
Route::get('/producto', [ProductoController::class, 'listaPro'])->name('producto.lista');
Route::get('/producto/agregar', [ProductoController::class, 'agregarPro'])->name('producto.agregar');
Route::post('/producto/guardar', [ProductoController::class, 'guardarPro'])->name('producto.guardar');
//-------------------------------------------------------------------------------------------

//Empleado
Route::get('/empleado', [EmpleadoController::class, 'listaEmp'])->name('empleado.lista');
Route::get('/empleado/agregar', [EmpleadoController::class, 'agregarEmp'])->name('empleado.agregar');
Route::post('/empleado/guardar', [EmpleadoController::class, 'guardarEmp'])->name('empleado.guardar');
//-------------------------------------------------------------------------------------------

//Proveedor
Route::get('/proveedor', [ProveedorController::class, 'listaPrv'])->name('proveedor.lista');
Route::get('/proveedor/agregar', [ProveedorController::class, 'agregarPrv'])->name('proveedor.agregar');
Route::post('/proveedor/guardar', [ProveedorController::class, 'guardarPrv'])->name('proveedor.guardar');