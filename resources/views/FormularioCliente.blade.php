<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Formulario</title>
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

        .formularioContenedor {
            background-color: #ffffff; 
            color: #333; 
            border-radius: 10px; 
            padding: 20px; 
            margin: 20px auto;
            width: 80%; 
            max-width: 500px; 
        }

        label {
            color: #ff6600; 
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"], select {
            width: 100%; 
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #ffffff; 
            color: #333; 
        }

        input[type="submit"] {
            background-color: #ff6600; 
            color: white; 
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #cc5200; 
        }

        .alert {
            color: #ff6600; 
            background-color: #f8d7da; 
            border-color: #f5c6cb; 
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
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
    <h1>SUS DATOS</h1>
    <div class="formularioContenedor">
        <form action="{{ route('addCliente') }}" method="POST">
            @csrf
            <label for="nombreCliente">Nombre:</label>
            <input type="text" name="nombre" value="">
            <label for="telefonoCliente">Telefono:</label>
            <input type="text" name="telefono" value="">
            <label for="tarjetaCliente">Tarjeta de crédito:</label>
            <input type="text" name="tarjetaCredito" value="">
            <label for="empresa">Empresa de Delivery:</label>
            <select name="empresaDelivery" id="lang">
                @foreach ($empresas as $empresa)
                    <option value="">{{$empresa->nombre}}</option>
                @endforeach
            </select>
            <input type="submit" value="Submit">

            @error('nombre')
            <div class="alert alert-danger">
                {{$message}}<br>
            </div>
            @enderror
            @error('telefono')
            <div class="alert alert-danger">
                {{$message}}<br>
            </div>
            @enderror
            @error('tarjetaCredito')
            <div class="alert alert-danger">
                {{$message}}<br>
            </div>
            @enderror
        </form>
    </div>
</body>
</html>