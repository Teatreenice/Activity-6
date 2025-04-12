<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear producto</title>
</head>
<body>
    <h1>Crear nuevo producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="{{ route('productos.index') }}">Volver al listado</a>
</body>
</html>
