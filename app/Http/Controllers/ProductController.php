<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }
    
    public function create(Request $request)
    {
        $product = new Product;
        $product->name= $request->name;
        $product->price = $request->price;
        $product->description= $request->description;

        $product->save();
        return response()->json($product);
    }
}
