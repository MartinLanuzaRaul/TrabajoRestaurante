<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 
    <title>Empresas</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #4d4c4c; 
            color: #ffffff; 
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #ff6600; 
            margin-top: 20px;
        }

        .navbar-brand, .nav-link {
            color: #ff6600; 
        }

        .nav-link:hover {
            color: #cc5200; 
        }

        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #ffffff; 
            color: #333; 
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2; 
            color: #333;
        }

        tr:hover {
            background-color: #f5f5f5; 
        }

        a {
            color: #ff6600; 
            text-decoration: none; 
        }

        a:hover {
            text-decoration: underline; 
        }

        button {
            background-color: #ff6600; 
            color: white; 
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #cc5200; 
        }

        .center {
    display: flex;
    justify-content: center; 
    align-items: center; 
    padding: 30px;
    margin: auto;
    width: 100%; 
}   
    

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rutaIndicePlato') }}">Platos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('rutaIndiceEmpresaDelivery')}}">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rutaIndicePedido') }}">Pedidos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Empresas</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        @foreach ($empresas as $empresa)
    <tr>
        <td>{{$empresa->nombre}}</td>
        <td>{{$empresa->email}}</td>
    </tr>
@endforeach
    </table>

    <div class="center">
        {{$empresas->links()}}
    </div>

    

</body>
</html>