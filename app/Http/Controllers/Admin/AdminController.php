<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class AdminController extends Controller {
    public function dashboard() {
        $totalProducts = Product::count();
        $totalOrders   = Order::count();
        $totalUsers    = User::count();
        $totalRevenue  = Order::where('status','completed')->sum('total');
        $recentOrders  = Order::latest()->take(5)->get();
        return view('admin.dashboard', compact('totalProducts','totalOrders','totalUsers','totalRevenue','recentOrders'));
    }

    public function products() {
        $products = Product::latest()->paginate(10);
        return view('admin.products', compact('products'));
    }

    public function createProduct() {
        return view('admin.product-form');
    }

    public function storeProduct(\Illuminate\Http\Request $request) {
        $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'required|numeric',
            'stock'       => 'required|integer',
            'category'    => 'required',
        ]);
        Product::create($request->only('name','description','price','stock','category','image'));
        return redirect()->route('admin.products')->with('success', 'Product added!');
    }

    public function editProduct(Product $product) {
        return view('admin.product-form', compact('product'));
    }

    public function updateProduct(\Illuminate\Http\Request $request, Product $product) {
        $product->update($request->only('name','description','price','stock','category','image'));
        return redirect()->route('admin.products')->with('success', 'Product updated!');
    }

    public function deleteProduct(Product $product) {
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted!');
    }

    public function orders() {
        $orders = Order::latest()->paginate(10);
        return view('admin.orders', compact('orders'));
    }

    public function updateOrderStatus(\Illuminate\Http\Request $request, Order $order) {
        $order->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Order status updated!');
    }
}