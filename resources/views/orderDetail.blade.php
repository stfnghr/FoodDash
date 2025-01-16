<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>Order Detail</x-slot:headTitle>

    @php
        $order = \App\Models\Order::with('orderDetails.menu')->find(session('order_id'));
    @endphp

    @if ($order && $order->orderDetails->isNotEmpty())
        <div class="border border-black rounded-xl p-8">
            <h1 class="text-3xl p-5 text-center font-bold">INVOICE</h1>
            <div class="flex space-x-4 mt-5 px-5">
                <!-- Bagian Bill to -->
                <div class="flex w-1/2 h-max">
                    <div class="p-5">
                        <h1 class="font-bold pb-1">Bill to:</h1>
                        <h2 class="font-bold text-lg">{{ $order->customer->name }}</h2>
                        <p class="pb-5">{{ $order->customer->address }}</p>

                        <h1 class="font-bold pb-1">Notes:</h1>
                        <p class="pb-5">{{ $order->notes ?? 'No notes provided' }}</p>

                        <h1 class="font-bold pb-1">Subscription Start:</h1>
                        <p class="pb-5">{{ $order->orderDetails->first()->delivery_date }}</p>

                        <h1 class="font-bold pb-1">Subscription End:</h1>
                        <p class="pb-5">{{ $order->orderDetails->first()->delivery_date->addMonth()->format('d/m/Y') }}</p>
                    </div>
                </div>

                <!-- Bagian Paket dan Ringkasan Pembayaran -->
                <div class="flex w-1/2 h-max">
                    <div class="p-5">
                        <h1 class="font-bold pb-1">Package:</h1>
                        @foreach($order->orderDetails as $orderDetail) <!-- Menggunakan loop untuk setiap orderDetail -->
                            <p class="pb-5">{{ $orderDetail->amount }} x {{ $orderDetail->menu->name }}</p> <!-- Menampilkan jumlah paket dan nama menu -->

                            <h1 class="font-bold pb-1">Total Amount:</h1>
                            <p class="pb-5">Rp{{ number_format($orderDetail->menu->price * $orderDetail->amount, 0, ',', '.') }}</p> <!-- Menampilkan total harga berdasarkan quantity -->

                            <h1 class="font-bold pb-1">Delivery Date:</h1>
                            <p class="pb-5">{{ $orderDetail->delivery_date }}</p> <!-- Menggunakan tanggal mulai sebagai tanggal pengiriman -->

                            <h1 class="font-bold pb-1">Delivery Status:</h1>
                            <p class="pb-5">{{ $orderDetail->delivery_status }}</p> <!-- Status pengiriman -->

                            <h1 class="font-bold pb-1">Courier:</h1>
                            <p class="pb-5">{{ $orderDetail->courier->name }} (+{{ $orderDetail->courier->phone }})</p> <!-- Nama kurir dan nomor telepon -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>No order details available.</p> 
    @endif
</x-layout>