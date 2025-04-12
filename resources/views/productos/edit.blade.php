<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar producto</title>
</head>
<body>
    <h1>Editar producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}" required><br><br>

        <label>Precio:</label>
        <input type="number" name="precio" value="{{ $producto->precio }}" step="0.01" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="{{ route('productos.index') }}">Volver al listado</a>
</body>
</html>
