<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedor</title>
</head>
<body>
    <h1>Proveedor</h1>

    <table>
        <thead>
            <tr>
                <th>idProveedor</th>
                <th>nombre</th>
                <th>fechaRegistro</th>
                <th>telefono</th>
                <th>correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor -> idProveedor}}</td>
                    <td>{{$proveedor -> nombre}}</td>
                    <td>{{$proveedor -> fechaRegistro}}</td>
                    <td>{{$proveedor -> telefono}}</td>
                    <td>{{$proveedor -> correo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{route('menu')}}">MENU</a>
</body>
</html>
