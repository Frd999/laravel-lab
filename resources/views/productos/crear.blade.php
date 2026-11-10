<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nuevo producto</title>
</head>

<body>
    <h1>Nuevo producto</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/productos">
        @csrf

        <p>
            <label>Nombre:
                <input type="text" name="nombre" value="{{ old('nombre') }}">
            </label>
        </p>
        <p>
            <label>Descripción:
                <textarea name="descripcion">{{ old('descripcion') }}</textarea>
            </label>
        </p>
        <p>
            <label>Precio:
                <input type="number" step="0.01" name="precio" value="{{ old('precio') }}">
            </label>
        </p>
        <p>
            <label>Stock:
                <input type="number" name="stock" value="{{ old('stock', 0) }}">
            </label>
        </p>

        <button type="submit">Guardar</button>
        <a href="/productos/lista">Cancelar</a>
    </form>
</body>

</html>
