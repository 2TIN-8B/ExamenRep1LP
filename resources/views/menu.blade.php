<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<body>
    <h1>Menu</h1>
{{-- ---------------------------------------------------------------- --}}
    <a href="{{route('producto.lista')}}">Lista Productos</a>
    <br>
    <a href="{{route('producto.agregar')}}">Agregar Productos</a>
    <br>
{{-- ---------------------------------------------------------------- --}}
    <br>
    <a href="{{route('empleado.lista')}}">Lista Empleado</a>
    <br>
    <a href="{{route('empleado.agregar')}}">Agregar Empleado</a>
    <br>
{{-- ---------------------------------------------------------------- --}} 
    <br>
    <a href="{{route('proveedor.lista')}}">Lista Proveedores</a>
    <br>
    <a href="{{route('proveedor.agregar')}}">Agregar Proveedores</a>
</body>
</html>