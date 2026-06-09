<x-app-layout>
    <div class="max-w-md mx-auto bg-white rounded-lg shadow p-8 text-center">
        <div class="text-6xl mb-4">✅</div>
        <h1 class="text-2xl font-bold text-green-600 mb-2">Order Placed Successfully!</h1>
        <p class="text-gray-600 mb-2">Order #{{ $order->id }}</p>
        <p class="text-gray-600 mb-6">Total: ${{ number_format($order->total, 2) }}</p>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('orders.index') }}"
                class="border border-blue-600 text-blue-600 px-6 py-2 rounded-lg hover:bg-blue-50">
                My Orders
            </a>
            <a href="{{ route('products.index') }}"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                Continue Shopping
            </a>
        </div>
    </div>
</x-app-layout>