<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Empleado</title>
</head>
<body>
    <h1>Agregar Empleado</h1>
    <br>
    <form action='{{route('empleado.guardar')}}' method="POST">
        @csrf
        <div>
            <label>idPrestamo</label>
            <input type="number" name="idPrestamo">
        </div>
        <div>
            <label>nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>apellido</label>
            <input type="text" name="apellido">
        </div>
        <div>
            <label>fechaIngreso</label>
            <input type="date" name="fechaIngreso">
        </div>
        <div>
            <label>salario</label>
            <input type="number" name="salario">
        </div>
        <div>
            <button type="submit">Guardar</button>                        
        </div>
        <br>
        <a href="{{route('menu')}}">MENU</a>
</body>
</html>