<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <div class="bg-blue-600 text-white rounded-lg shadow p-6">
            <p class="text-sm opacity-80">Total Products</p>
            <p class="text-3xl font-bold mt-1">{{ $totalProducts }}</p>
        </div>
        <div class="bg-green-600 text-white rounded-lg shadow p-6">
            <p class="text-sm opacity-80">Total Orders</p>
            <p class="text-3xl font-bold mt-1">{{ $totalOrders }}</p>
        </div>
        <div class="bg-yellow-500 text-white rounded-lg shadow p-6">
            <p class="text-sm opacity-80">Total Users</p>
            <p class="text-3xl font-bold mt-1">{{ $totalUsers }}</p>
        </div>
        <div class="bg-purple-600 text-white rounded-lg shadow p-6">
            <p class="text-sm opacity-80">Revenue</p>
            <p class="text-3xl font-bold mt-1">${{ number_format($totalRevenue, 2) }}</p>
        </div>
    </div>
    <div class="flex gap-4 mb-8">
        <a href="{{ route('admin.products') }}"
            class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-medium">
            Manage Products
        </a>
        <a href="{{ route('admin.orders') }}"
            class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 font-medium">
            Manage Orders
        </a>
    </div>
    <h2 class="text-xl font-bold mb-4">Recent Orders</h2>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-4 text-left">Order #</th>
                    <th class="p-4 text-left">Customer</th>
                    <th class="p-4 text-left">Total</th>
                    <th class="p-4 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($recentOrders as $order)
                <tr class="border-t">
                    <td class="p-4">#{{ $order->id }}</td>
                    <td class="p-4">{{ $order->name }}</td>
                    <td class="p-4">${{ number_format($order->total, 2) }}</td>
                    <td class="p-4">
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm">
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