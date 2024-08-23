<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleado</title>
</head>
<body>
    <h1>Empleado</h1>

    <table>
        <thead>
            <tr>
                <th>idPrestamo</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>fechaIngreso</th>
                <th>salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado -> idPrestamo}}</td>
                    <td>{{$empleado -> nombre}}</td>
                    <td>{{$empleado -> apellido}}</td>
                    <td>{{$empleado -> fechaIngreso}}</td>
                    <td>{{$empleado -> salario}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{route('menu')}}">MENU</a>
</body>
</html>