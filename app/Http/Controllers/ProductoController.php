<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos de la base de datos
        return view('productos.index', compact('productos')); // Enviar a la vista
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        Producto::create($request->all()); // Guardar producto en la base de datos
        return redirect()->route('productos.index');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id); // Buscar producto por ID
        return view('productos.edit', compact('producto')); // Enviar a la vista
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id); // Buscar producto por ID
        $producto->update($request->all()); // Actualizar producto
        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id); // Buscar producto por ID
        $producto->delete(); // Eliminar producto
        return redirect()->route('productos.index');
    }
}