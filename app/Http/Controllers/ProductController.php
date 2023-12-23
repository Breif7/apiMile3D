<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Obtener todos los productos
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Aquí puedes agregar más métodos según sea necesario, 
    // como show($id) para obtener un solo producto, 
    // store(Request $request) para crear uno nuevo, 
    // update(Request $request, $id) para actualizar un producto, 
    // y destroy($id) para eliminar un producto.
}
