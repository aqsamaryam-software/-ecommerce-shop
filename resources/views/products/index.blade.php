<x-app-layout>

    <!-- Hero Section -->
    <!-- Hero Section -->
<div class="relative rounded-2xl mb-10 overflow-hidden" style="height: 500px;">
    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=1400"
        alt="Shop Banner" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30 flex items-center">
        <div class="px-12">
            <p class="text-yellow-400 font-semibold text-lg mb-2 uppercase tracking-widest">New Collection 2026</p>
            <h1 class="text-5xl font-extrabold text-white mb-4 leading-tight">
                Shop The Best <br> Products Online 🛍
            </h1>
            <p class="text-gray-200 text-xl mb-8 max-w-lg">
                Discover thousands of amazing products at unbeatable prices. Free delivery on orders over $50!
            </p>
            <div class="flex gap-4">
                <a href="#products"
                    class="bg-yellow-400 text-black px-8 py-3 rounded-full font-bold text-lg hover:bg-yellow-300 transition">
                    Shop Now →
                </a>
                <a href="#products"
                    class="border-2 border-white text-white px-8 py-3 rounded-full font-bold text-lg hover:bg-white hover:text-black transition">
                    View Deals
                </a>
            </div>
            <div class="flex gap-8 mt-10">
                <div class="text-white text-center">
                    <p class="text-3xl font-bold text-yellow-400">52+</p>
                    <p class="text-sm text-gray-300">Products</p>
                </div>
                <div class="text-white text-center">
                    <p class="text-3xl font-bold text-yellow-400">5k+</p>
                    <p class="text-sm text-gray-300">Customers</p>
                </div>
                <div class="text-white text-center">
                    <p class="text-3xl font-bold text-yellow-400">4.9⭐</p>
                    <p class="text-sm text-gray-300">Rating</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Features Section -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
        <div class="bg-white rounded-xl shadow p-6 text-center">
            <div class="text-4xl mb-3">🚚</div>
            <h3 class="font-bold text-lg mb-2">Free Delivery</h3>
            <p class="text-gray-500 text-sm">Free shipping on all orders over $50</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center">
            <div class="text-4xl mb-3">🔒</div>
            <h3 class="font-bold text-lg mb-2">Secure Payment</h3>
            <p class="text-gray-500 text-sm">100% secure and safe payments</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center">
            <div class="text-4xl mb-3">↩️</div>
            <h3 class="font-bold text-lg mb-2">Easy Returns</h3>
            <p class="text-gray-500 text-sm">30 day return policy no questions asked</p>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="mb-10">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Shop By Category</h2>
        <div class="grid grid-cols-2 sm:grid-cols-5 gap-4">
            <a href="{{ route('products.index', ['category' => 'Clothing']) }}"
                class="bg-pink-100 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="text-4xl mb-2">👕</div>
                <p class="font-semibold text-gray-700">Clothing</p>
            </a>
            <a href="{{ route('products.index', ['category' => 'Footwear']) }}"
                class="bg-blue-100 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="text-4xl mb-2">👟</div>
                <p class="font-semibold text-gray-700">Footwear</p>
            </a>
            <a href="{{ route('products.index', ['category' => 'Accessories']) }}"
                class="bg-yellow-100 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="text-4xl mb-2">⌚</div>
                <p class="font-semibold text-gray-700">Accessories</p>
            </a>
            <a href="{{ route('products.index', ['category' => 'Bags']) }}"
                class="bg-green-100 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="text-4xl mb-2">👜</div>
                <p class="font-semibold text-gray-700">Bags</p>
            </a>
            <a href="{{ route('products.index', ['category' => 'Electronics']) }}"
                class="bg-purple-100 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="text-4xl mb-2">📱</div>
                <p class="font-semibold text-gray-700">Electronics</p>
            </a>
        </div>
    </div>

    <!-- Search and Filter -->
    <div id="products" class="mb-6">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">All Products</h2>
        <form method="GET" action="{{ route('products.index') }}" class="flex gap-2 w-full">
            <input type="text" name="search" placeholder="Search products..."
                value="{{ request('search') }}"
                class="border border-gray-300 rounded-lg px-4 py-2 flex-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <select name="category" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">All Categories</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat }}" {{ request('category')==$cat ? 'selected' : '' }}>{{ $cat }}</option>
                @endforeach
            </select>
            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Filter</button>
        </form>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @forelse($products as $product)
        <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition">
            <div class="h-48 bg-gray-200 rounded mb-3 overflow-hidden">
                @if($product->image)
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-4xl">🛍</div>
                @endif
            </div>
            <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">{{ $product->category }}</span>
            <h3 class="font-bold text-lg mt-2">{{ $product->name }}</h3>
            <p class="text-gray-500 text-sm mt-1">{{ Str::limit($product->description, 60) }}</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-blue-600 font-bold text-xl">${{ $product->price }}</span>
                <div class="flex gap-2">
                    <a href="{{ route('products.show', $product) }}"
                        class="border border-blue-600 text-blue-600 px-3 py-1 rounded text-sm hover:bg-blue-50">View</a>
                    <form method="POST" action="{{ route('cart.add', $product) }}">
                        @csrf
                        <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
            <div class="col-span-4 text-center py-12">
                <p class="text-gray-500 text-lg">No products found!</p>
            </div>
        @endforelse
    </div>

    <!-- Newsletter Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-2xl p-10 mt-10 text-center">
        <h2 class="text-2xl font-bold mb-2">Subscribe To Our Newsletter 📧</h2>
        <p class="opacity-90 mb-6">Get latest deals and offers directly in your inbox</p>
        <div class="flex gap-2 max-w-md mx-auto">
            <input type="email" placeholder="Enter your email"
                class="flex-1 px-4 py-2 rounded-lg text-gray-800 focus:outline-none">
            <button class="bg-white text-blue-600 px-6 py-2 rounded-lg font-bold hover:bg-gray-100">
                Subscribe
            </button>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-10 border-t pt-8 grid grid-cols-1 sm:grid-cols-3 gap-8 text-gray-600">
        <div>
            <h3 class="font-bold text-gray-800 text-lg mb-3">🛍 EcommerceShop</h3>
            <p class="text-sm">Your one stop shop for all your needs. Quality products at best prices.</p>
        </div>
        <div>
            <h3 class="font-bold text-gray-800 mb-3">Quick Links</h3>
            <ul class="text-sm space-y-2">
                <li><a href="{{ route('home') }}" class="hover:text-blue-600">Home</a></li>
                <li><a href="{{ route('products.index') }}" class="hover:text-blue-600">Products</a></li>
                <li><a href="{{ route('cart.index') }}" class="hover:text-blue-600">Cart</a></li>
                <li><a href="{{ route('orders.index') }}" class="hover:text-blue-600">My Orders</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-gray-800 mb-3">Contact Us</h3>
            <ul class="text-sm space-y-2">
                <li>📧 support@ecommerceshop.com</li>
                <li>📞 +1 234 567 890</li>
                <li>📍 123 Shop Street, City</li>
            </ul>
        </div>
    </div>
    <div class="text-center text-gray-400 text-sm mt-6 pb-4">
        © 2024 EcommerceShop. All rights reserved.
    </div>

</x-app-layout>