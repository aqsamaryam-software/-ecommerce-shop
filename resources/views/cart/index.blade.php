<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">Shopping Cart</h1>
    @if(empty(session('cart')))
        <div class="bg-white rounded-lg shadow p-8 text-center">
            <p class="text-gray-500 text-lg mb-4">Your cart is empty!</p>
            <a href="{{ route('products.index') }}"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                Shop Now
            </a>
        </div>
    @else
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="p-4 text-left">Product</th>
                        <th class="p-4 text-left">Price</th>
                        <th class="p-4 text-left">Quantity</th>
                        <th class="p-4 text-left">Total</th>
                        <th class="p-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $grandTotal = 0; @endphp
                    @foreach(session('cart') as $id => $item)
                        @php $grandTotal += $item['price'] * $item['quantity']; @endphp
                        <tr class="border-t">
                            <td class="p-4 font-medium">{{ $item['name'] }}</td>
                            <td class="p-4">${{ $item['price'] }}</td>
                            <td class="p-4">
                                <form method="POST" action="{{ route('cart.update', $id) }}">
                                    @csrf @method('PATCH')
                                    <input type="number" name="quantity"
                                        value="{{ $item['quantity'] }}" min="1"
                                        class="border rounded px-2 py-1 w-16"
                                        onchange="this.form.submit()">
                                </form>
                            </td>
                            <td class="p-4 font-medium">${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td class="p-4">
                                <form method="POST" action="{{ route('cart.remove', $id) }}">
                                    @csrf @method('DELETE')
                                    <button class="text-red-500 hover:text-red-700 font-medium">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-4 flex justify-between items-center bg-gray-50 border-t">
                <span class="text-xl font-bold">Total: ${{ number_format($grandTotal, 2) }}</span>
                <a href="{{ route('checkout') }}"
                    class="bg-green-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-green-700">
                    Proceed to Checkout ✅
                </a>
            </div>
        </div>
    @endif
</x-app-layout>