<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda Doña Conchita</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8e8c8;
                text-align: center;
                padding: 50px;
            }
            .container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                max-width: 900px;
                margin: auto;
            }
            .boton {
                display: inline-block;
                margin: 10px;
                padding: 12px 24px;
                font-size: 18px;
                color: #fff;
                background-color: #d2691e;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
                transition: background 0.3s;
            }
            .boton:hover {
                background-color: #8b4513;
            }
        </style>
    </head>
    <body>
        <div class="container">


            <div class="mt-4">
                <a href="/inicio" class="boton">Portada</a>
                <a href="/tienda" class="boton">Tienda</a>
                <a href="/productos" class="boton">Productos</a>
            </div>

            <br>
            @yield('content')
        </div>
    </body>
</html>