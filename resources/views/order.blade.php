<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>Pesanan</x-slot:headTitle>

    @forelse ($orders as $order)
        @foreach ($order->orderDetails as $orderDetail)
            <a href="/orderDetail/{{ $orderDetail->id }}">
                <div class="pb-5">
                    <div class="border border-black rounded-xl p-3">
                        <div class="flex justify-evenly items-center p-5">
                            <div>
                                <img src="{{ $orderDetail->menu->image ?? '/default-image.jpg' }}"
                                    alt="{{ $orderDetail->menu->name }}" class="w-20">
                            </div>

                            <div class="text-left">
                                <h1 class="text-3xl font-bold">{{ $orderDetail->menu->name }}</h1>
                                <p class="py-3">{{ $order->start_date }} - {{ $order->end_date }}</p>
                                <p class="text-green-600">{{ $order->payment_status == 'Paid' ? 'Lunas' : 'Belum Lunas' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    @empty
        <p>Tidak ada pesanan.</p>
    @endforelse
</x-layout>
