<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index(Request $request) {
        $products = Product::all();
        $categories = Product::distinct()->pluck('category');
        return view('products.index', compact('products', 'categories'));
    }

    public function show(Product $product) {
        return view('products.show', compact('product'));
    }
}