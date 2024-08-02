<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store()
    {
        $product = Product::create([
            "name" => fake()->title(),
            "description" => fake()->paragraph(),
            "price" => fake()->randomFloat(min: 10, max: 100)
        ]);
        return response($product);
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
