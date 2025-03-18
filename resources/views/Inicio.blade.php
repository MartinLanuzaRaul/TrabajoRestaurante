<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buranya Ramen</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #4d4c4c;
            color: #333; 
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #000000; 
            padding: 20px;
            color: #ff6600; 
        }
        h1 {
            margin: 0;
        }
        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px 0;
        }
        .gallery img {
            width: 300px;
            height: auto;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .button {
            background-color: #ff6600; 
            color: white; 
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            border: none;
            font-weight: bold;
        }
        .button:hover {
            background-color: #cc5200; 
        }
        section {
            margin-top: 50px;
            background-color: #000000; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2, p{
            color: #ff6600;
        }
    </style>
</head>
<body>

<header>
    <h1>Buranya Ramen</h1>
</header>

<div class="gallery">
    <img src="{{ URL::to('/images/sushi.jpg')}}" alt="Sushi">
    <img src="{{ URL::to('/images/ramen.avif')}}" alt="Ramen">
    <img src="{{ URL::to('/images/gyoza.jpg')}}" alt="Tempura">
    <img src="{{ URL::to('/images/takoyaki.jpg')}}" alt="Tempura">
    <img src="{{ URL::to('/images/dango.jpg')}}" alt="Tempura">
</div>

<a href="{{ route('rutaIndicePlato') }}" class="button">Ver Platos</a>

<section id="platos">
    <h2>Ven a probar nuestros Platos</h2>
    <p>患者をケアすることは重要であり、患者は患者に従うことになりますが、同時に多くの仕事と苦痛が生じることもあります。というのは、最も細かい点に至ると、
        そこから何らかの利益を得ない限り、いかなる種類の仕事も実践すべきではないからである。繁殖が起こらないことを願って、彼は痛​​みから髪の毛になりたい喜びの中で叱責の痛みに怒らないでください。
        情欲に目がくらまなければ、外に出ることはなく、義務を放棄する者が悪いのであり、魂は柔らかくなる、つまり労苦するのである。.</p>
</section>

</body>
</html>