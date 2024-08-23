<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregar Producto</h1>
    <br>
    <form action='{{route('producto.guardar')}}' method="POST">
        @csrf
        <div>
            <label>id</label>
            <input type="number" name="nombre">
        </div>
        <div>
            <label>descripcion</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>precio</label>
            <input type="number" name="precio">
        </div>
        <div>
            <label>stock</label>
            <input type="number" name="stock">
        </div>
        <div>
            <label>pagaIsv</label>
            <input type="checkbox" name="pagaIsv">
        </div>
        <div>
            <button type="submit">Guardar</button>                        
        </div>
        <br>
        <a href="{{route('menu')}}">MENU</a>
</body>
</html>