<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>Detail Pesanan</x-slot:headTitle>

    @php
        $order = \App\Models\Order::with('orderDetails.menu')->find(session('order_id'));
    @endphp

    @if ($order && $order->orderDetails->isNotEmpty())
        <div class="border border-black rounded-xl p-8">
            <h1 class="text-3xl p-5 text-center font-bold">INVOICE</h1>
            <div class="flex space-x-4 mt-5 px-5">
                <!-- Bagian Tagihan ke -->
                <div class="flex w-1/2 h-max">
                    <div class="p-5">
                        <h1 class="font-bold pb-1">Tagihan ke:</h1>
                        <h2 class="font-bold text-lg">{{ $order->customer->name }}</h2>
                        <p class="pb-5">{{ $order->customer->address }}</p>

                        <h1 class="font-bold pb-1">Catatan:</h1>
                        <p class="pb-5">{{ $order->notes ?? 'Tidak ada catatan yang diberikan' }}</p>

                        <h1 class="font-bold pb-1">Mulai Langganan:</h1>
                        <p class="pb-5">{{ $order->orderDetails->first()->delivery_date }}</p>

                        <h1 class="font-bold pb-1">Akhir Langganan:</h1>
                        <p class="pb-5">{{ $order->orderDetails->first()->delivery_date->addMonth()->format('d/m/Y') }}</p>
                    </div>
                </div>

                <!-- Bagian Paket dan Ringkasan Pembayaran -->
                <div class="flex w-1/2 h-max">
                    <div class="p-5">
                        <h1 class="font-bold pb-1">Paket:</h1>
                        @foreach($order->orderDetails as $orderDetail) <!-- Menggunakan loop untuk setiap orderDetail -->
                            <p class="pb-5">{{ $orderDetail->amount }} x {{ $orderDetail->menu->name }}</p> <!-- Menampilkan jumlah paket dan nama menu -->

                            <h1 class="font-bold pb-1">Jumlah Total:</h1>
                            <p class="pb-5">Rp{{ number_format($orderDetail->menu->price * $orderDetail->amount, 0, ',', '.') }}</p> <!-- Menampilkan total harga berdasarkan jumlah -->

                            <h1 class="font-bold pb-1">Tanggal Pengiriman:</h1>
                            <p class="pb-5">{{ $orderDetail->delivery_date }}</p> <!-- Menggunakan tanggal pengiriman -->

                            <h1 class="font-bold pb-1">Status Pengiriman:</h1>
                            <p class="pb-5">{{ $orderDetail->delivery_status }}</p> <!-- Status pengiriman -->

                            <h1 class="font-bold pb-1">Kurir:</h1>
                            <p class="pb-5">{{ $orderDetail->courier->name }} (+{{ $orderDetail->courier->phone }})</p> <!-- Nama kurir dan nomor telepon -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>Detail pesanan tidak tersedia.</p> 
    @endif
</x-layout>
