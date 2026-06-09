<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">My Orders</h1>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-4 text-left">Order #</th>
                    <th class="p-4 text-left">Date</th>
                    <th class="p-4 text-left">Total</th>
                    <th class="p-4 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                <tr class="border-t">
                    <td class="p-4 font-medium">#{{ $order->id }}</td>
                    <td class="p-4">{{ $order->created_at->format('M d, Y') }}</td>
                    <td class="p-4">${{ number_format($order->total, 2) }}</td>
                    <td class="p-4">
                        <span class="px-3 py-1 rounded-full text-sm font-medium
                            {{ $order->status == 'completed' ? 'bg-green-100 text-green-800' :
                               ($order->status == 'cancelled' ? 'bg-red-100 text-red-800' :
                               'bg-yellow-100 text-yellow-800') }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="p-8 text-center text-gray-500">No orders yet!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>