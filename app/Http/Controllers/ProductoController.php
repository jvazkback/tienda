<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Todos los productos.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto.all', ['productos' => $productos]);
    }

    /**
     * Mostrar el formulario para crear un nuevo producto.
     */
    public function create()
    {
        return view('producto.crear');
    }

    /**
     * Recibe lo enviado por el formulario en create.
     * Crea un nuevo producto en base de datos.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Muestra un producto con toda su información.
     */
    public function show($id)
    {
        return view('producto.profile', [
            'producto' => Producto::findOrFail($id)
        ]);
    }

    /**
     * Muestra el formulario para editar la
     * información respecto a un producto.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Recibe lo enviado por edit y actualiza
     * la informción en base de datos
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Elimina un producto de la base de datos.
     */
    public function destroy($id)
    {
        //
    }
}
