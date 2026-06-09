<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">Manage Orders</h1>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-4 text-left">Order #</th>
                    <th class="p-4 text-left">Customer</th>
                    <th class="p-4 text-left">Total</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Update Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                <tr class="border-t">
                    <td class="p-4 font-medium">#{{ $order->id }}</td>
                    <td class="p-4">{{ $order->name }}</td>
                    <td class="p-4">${{ number_format($order->total, 2) }}</td>
                    <td class="p-4">
                        <span class="px-2 py-1 rounded text-sm
                            {{ $order->status == 'completed' ? 'bg-green-100 text-green-800' :
                               ($order->status == 'cancelled' ? 'bg-red-100 text-red-800' :
                               'bg-yellow-100 text-yellow-800') }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>
                    <td class="p-4">
                        <form method="POST" action="{{ route('admin.orders.status', $order) }}" class="flex gap-2">
                            @csrf @method('PATCH')
                            <select name="status"
                                class="border border-gray-300 rounded px-2 py-1 text-sm focus:outline-none">
                                <option value="pending" {{ $order->status=='pending' ? 'selected' : '' }}>Pending</option>
                                <option value="processing" {{ $order->status=='processing' ? 'selected' : '' }}>Processing</option>
                                <option value="completed" {{ $order->status=='completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ $order->status=='cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                            <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                                Update
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="p-8 text-center text-gray-500">No orders yet!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $orders->links() }}</div>
</x-app-layout>