<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de cuentas</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }
        table, td, th {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th {
            height: 70px;
        }
        td {
            height: 30px;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
    
    <table>
        <tr>
            <th>CCUENTA</th>
            <th>TIPOCUENTA</th>
            <th>USUARIO</th>
            <th>FDESDE</th>
        </tr>
        @foreach ($cuentas as $cuenta)
            <tr>
                <td>{{ $cuenta->CCUENTA }}</td>
                <td>{{ $cuenta->TIPOCUENTA }}</td>
                <td>{{ $cuenta->USUARIO }}</td>
                <td>{{ $cuenta->FDESDE }}</td>
                <td>
                    <a href="/cuentas/ver/{{$cuenta->id}}">Ver</a>
                    <a href="/cuentas/editar/{{$cuenta->id}}">Editar</a>
                    <a href="/cuentas/eliminar/{{$cuenta->id}}">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="/cuentas/crear">Nueva cuenta</a>
</body>
</html>