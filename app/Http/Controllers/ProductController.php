<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
{
    $product =  Product::all();
    return response()->json($product, 200);
}

public function show($id)
{
    $product = Product::find($id);
    if($product) {
        return response()->json($product, 200);
    } else {
        return response()->json([
            'message' => 'Product not found'
        ], 404);
    }
}
public function store(Request $request)
{
    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->image = $request->image;
    $product->save();
    return response()->json($product, 201);
}


}
