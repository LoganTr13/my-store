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

        Product::create([
            "name" => $name,
            "price" => $price,
            "description" => $description
        ]);
        return redirect()->route('products.index')
            ->with(["message" => "Product Created!"])
            ->setStatusCode(201);
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
        return redirect()->route('products.index')
            ->with([
                "message" => "Product $id Deleted!"
            ]);
    }
    public function update(int $id, Request $request)
    {
        $product = Product::find($id)->update([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "price" => $request->input('price')
        ]);
        return redirect()->route('products.index')
            ->with([
                "message" => "Product $id Updated!"
            ]);
    }
}
