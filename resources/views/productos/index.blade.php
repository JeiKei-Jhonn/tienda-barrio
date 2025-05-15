@extends('layouts.app')

@section('content')
    <head>
        <style>
            body {
                font-family: 'Cooper Black', serif;
                background-color: #f8e8c8;
                text-align: center;
                padding: 50px;
            }

            h2 {
                color: #8b4513;
                font-size: 28px;
                margin-top: 10px;
            }

            .container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                max-width: 950px;
                margin: auto;
            }

            .table {
                background-color: #ffffff;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            }

            .table thead {
                background-color: #d2691e;
                color: white;
            }

            .table tbody tr:nth-child(even) {
                background-color: #f4dbc3;
            }

            .btn {
                font-weight: bold;
                border-radius: 5px;
            }

            .btn-success {
                background-color: #d2691e;
                border-color: #8b4513;
            }

            .btn-success:hover {
                background-color: #8b4513;
                border-color: #5a2e15;
            }

            .btn-danger {
                background-color: #c0392b;
                border-color: #8b0000;
            }

            .btn-danger:hover {
                background-color: #8b0000;
            }

            .btn-warning {
                background-color: #e6b800;
                border-color: #b58900;
                color: black;
            }

            .btn-warning:hover {
                background-color: #b58900;
            }
        </style>
    </head>

    <div class="container">
        <h2>Lista de productos de la tienda</h2>

        <!-- Botón Agregar fuera de la tabla -->
        <div class="text-end mb-3">
            <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar Producto</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>${{ number_format($producto->precio, 2) }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td class="text-center">
                            <!-- Botón para eliminar con confirmación -->
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">🗑 Eliminar</button>
                            </form>

                            <!-- Botón para editar -->
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Función JavaScript para Confirmación -->
    <script>
        function confirmDelete() {
            return confirm('¿Estás seguro de que deseas eliminar este producto? Esta acción no se puede deshacer.');
        }
    </script>
@endsection