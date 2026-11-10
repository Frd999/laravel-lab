<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>

<body>
    <h1>Lista de productos</h1>
    @if (session('ok'))
        <p style="color: green;">{{ session('ok') }}</p>
    @endif

    <p><a href="/productos/crear">+ Nuevo producto</a></p>

    <table border="1" cellpadding="6">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->descripcion }}</td>
                    <td>${{ number_format($p->precio, 2) }}</td>
                    <td>{{ $p->stock }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay productos</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
