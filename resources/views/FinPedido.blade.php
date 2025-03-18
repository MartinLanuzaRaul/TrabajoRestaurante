<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedido Realizado</title>
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

        p {
            color: #ffffff; 
            margin: 20px 0;
            font-size: 18px; /* Tamaño de fuente del párrafo */
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
            margin: 10px; 
        }

        button:hover {
            background-color: #cc5200; 
        }

        a {
            color: white; 
            text-decoration: none; 
        }

        a:hover {
            text-decoration: underline; 
        }

        .contenedor {
            margin: 20px 0; 
        }

        img {
            max-width: 100%; 
            height: auto; 
        }
    </style>
</head>
<body>
    <h1>Pedido realizado</h1>
    <p>Gracias por confiar en nosotros, su pedido será entregado en breve.</p>
    
    <div class="contenedor">
        <img src="{{ URL::to('/images/neco.webp')}}" height="300px" width="200px">
    </div>

    <a href="{{route('inicio')}}"><button>Inicio</button></a>
    <a href="{{route('rutaIndicePlato')}}"><button>Platos</button></a>
</body>
</html>