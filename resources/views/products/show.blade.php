<x-app-layout>
    <div class="bg-white rounded-lg shadow p-8 max-w-2xl mx-auto">
        <div class="h-64 bg-gray-200 rounded mb-6 flex items-center justify-center text-6xl">🛍</div>
        <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">{{ $product->category }}</span>
        <h1 class="text-3xl font-bold mt-3 mb-2">{{ $product->name }}</h1>
        <p class="text-gray-600 mb-4">{{ $product->description }}</p>
        <p class="text-sm text-gray-500 mb-6">Stock: {{ $product->stock }} available</p>
        <div class="flex justify-between items-center">
            <span class="text-3xl font-bold text-blue-600">${{ $product->price }}</span>
            <form method="POST" action="{{ route('cart.add', $product) }}">
                @csrf
                <button class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg hover:bg-blue-700">
                    Add to Cart 🛒
                </button>
            </form>
        </div>
    </div>
</x-app-layout>