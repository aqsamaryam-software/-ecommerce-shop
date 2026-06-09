<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600">🛍 EcommerceShop</a>
        <div class="flex gap-6 items-center">
            <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-blue-600">Products</a>
            <a href="{{ route('cart.index') }}" class="text-gray-600 hover:text-blue-600">
                🛒 Cart
                @if(session('cart'))
                    <span class="bg-red-500 text-white text-xs rounded-full px-2">{{ count(session('cart')) }}</span>
                @endif
            </a>
            @auth
                <a href="{{ route('orders.index') }}" class="text-gray-600 hover:text-blue-600">My Orders</a>
                <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-blue-600">Admin</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button class="text-red-500 hover:text-red-700">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600">Login</a>
                <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Register</a>
            @endauth
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="bg-red-100 text-red-800 p-3 rounded mb-4">{{ session('error') }}</div>
        @endif
        {{ $slot }}
    </main>
</body>
</html>