@extends('layouts.app')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Tienda de Barrio "Doña Conchita"</title>
        <style>
            body {
                font-family: Cooper black;
                background-color: #f8e8c8;
                text-align: center;
                padding: 50px;
            }
            h1 {
                color: #d2691e;
                font-size: 36px;
                text-transform: uppercase;
                border-bottom: 4px solid #8b4513;
                display: inline-block;
                padding-bottom: 10px;
            }
            h2 {
                color: #8b4513;
                font-size: 28px;
                margin-top:10px;
            }
            .container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                max-width: 950px;
                margin: auto;
            }
            .imagen-tienda {
                width: 100%;
                max-width: 400px;
                border-radius: 10px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Tienda de Barrio "Doña Conchita"</h1>
            <h2>Bienvenidos a nuestra tienda</h2>
            <img src="{{ asset('IMAGEN.png') }}" alt="Imagen de la tienda" class="imagen-tienda">
        </div>
    </body>
@endsection