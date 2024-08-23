<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto</title>
</head>
<body>
    <h1>Producto</h1>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>descripcion</th>
                <th>precio</th>
                <th>stock</th>
                <th>pagaIsv</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto -> id}}</td>
                    <td>{{$producto -> descripcion}}</td>
                    <td>{{$producto -> precio}}</td>
                    <td>{{$producto -> stock}}</td>
                    <td>{{$producto -> pagaIsv}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{route('menu')}}">MENU</a>
</body>
</html>