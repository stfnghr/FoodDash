<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>Order</x-slot:headTitle>

    @php
        $order = session('order'); // Ambil data dari session
    @endphp

    @if ($order && isset($order['id']))
        <a href="/orderDetail/{{ $order['id'] }}">
            <div class="border border-black rounded-xl p-3">
                <div class="flex justify-evenly items-center p-5">
                    <div>
                        <img src="{{ $menu->image ?? '/default-image.jpg' }}" alt="{{ $menu->name }}" class="w-20">
                    </div>

                    <div class="text-left">
                        <h1 class="text-3xl font-bold">{{ $menu->name }}</h1>
                        <p class="py-3">{{ $order['start_date'] }} - {{ $order['end_date'] }}</p>
                        <p class="text-green-600">{{ $order['payment_status'] == 'paid' ? 'Paid' : 'Unpaid' }}</p>
                    </div>
                </div>
            </div>
        </a>
    @else
        <p>No orders available.</p> 
    @endif

</x-layout>