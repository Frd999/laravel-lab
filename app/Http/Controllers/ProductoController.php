<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Consulta: devuelve todos los productos en formato JSON
    public function index(): JsonResponse
    {
        return response()->json(Producto::latest()->get());
    }

    // Guarda un registro de prueba
    public function storePrueba(): JsonResponse
    {
        $producto = Producto::create([
            'nombre' => 'Teclado mecánico',
            'precio' => 899.90,
            'stock'  => 15,
        ]);

        return response()->json($producto, 201);
    }
        // Muestra los productos en una tabla HTML
    public function lista()
    {
        $productos = Producto::latest()->get();
        return view('productos.index', compact('productos'));
    }
        // Muestra el formulario
    public function crear()
    {
        return view('productos.crear');
    }

    // Guarda el producto (POST) con validación
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre'      => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
        ]);

        Producto::create($datos);

        return redirect('/productos/lista')->with('ok', 'Producto creado correctamente');
    }
}