<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(){
        $books = Product::all();
        return view('welcome', compact('books'));
    }

    public function createProductPage(){
        return view('createProduct');
    }

    public function createProduct(Request $request){
        $request->validate([
            'name' => ['required', 'min:2'],
            'description' => ['required', 'min:5'],
            'stock' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'integer', 'min:100'],
            'production_date' => ['required']
        ]);
        
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
            'production_date' => $request->production_date,
        ]);

        return redirect()->route('product.view');
    }
}
