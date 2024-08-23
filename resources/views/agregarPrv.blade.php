<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Proveedor</title>
</head>
<body>
    <h1>Agregar Proveedor</h1>
    <br>
    <form action='{{route('proveedor.guardar')}}' method="POST">
        @csrf
        <div>
            <label>idProveedor</label>
            <input type="number" name="idProveedor">
        </div>
        <div>
            <label>nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>fechaRegistro</label>
            <input type="date" name="fechaRegistro">
        </div>
        <div>
            <label>telefono</label>
            <input type="text" name="telefono">
        </div>
        <div>
            <label>correo</label>
            <input type="text" name="correo">
        </div>
        <div>
            <button type="submit">Guardar</button>                        
        </div>
        <br>
        <a href="{{route('menu')}}">MENU</a>
</body>
</html>