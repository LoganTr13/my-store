<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');

        $product = Product::create([
            "name" => $name,
            "price" => $price,
            "description" => $description
        ]);
        return response($product); // não sei o que retornar, penso em fazer voltar para a pagina de lista, vou ver
    }
    public function show(int $id)
    {
        $product = Product::find($id);
        return response($product);
    }
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function delete(int $id)
    {
        Product::destroy($id);
        return response('Produto de ID ' . $id . ' foi deletado!');
    }
    public function update(int $id)
    {
        $product = Product::find($id)->update([
            "name" => fake()->title(),
            "description" => fake()->paragraph(),
            "price" => fake()->randomFloat(min: 10, max: 100)
        ]);
        return response($product);
    }
}
