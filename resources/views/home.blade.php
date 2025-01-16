<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>Beranda</x-slot:headTitle>
    
    <h1 class="text-3xl p-5 text-center font-bold">PAKET</h1>

    {{-- Bagian Non-Vegetarian --}}
    <h2 class="text-xl font-semibold mt-10">NON-VEGETARIAN</h2>
    <div class="flex flex-wrap gap-4 mt-5 px-10">
        @foreach ($menus as $menu)
            @if ($menu->id >= 1 && $menu->id <= 6) {{-- ID 1-6 untuk Non-Vegetarian --}}
                <div class="bg-[#E9A05E] p-8 rounded-3xl shadow-md w-[48%] h-60 flex justify-center items-center">
                    <a href="/detailMenu/{{ $menu->id }}">
                        <div class="flex space-x-4 items-center">
                            <img src="{{ $menu->image ?? '/default-image.png' }}" alt="makanan" class="w-16">
                            <div>
                                <h1 class="text-xl font-bold">{{ $menu->name }}</h1>
                                <p class="text-md font-medium">
                                    {{ explode('.', $menu->description)[0] }}.
                                </p>
                                <p class="text-lg font-semibold">Rp{{ number_format($menu->price, 0, ',', '.') }}/30 Hari</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>

    {{-- Bagian Vegetarian --}}
    <h2 class="text-xl font-semibold mt-20">VEGETARIAN</h2>
    <div class="flex flex-wrap gap-4 mt-5 px-10">
        @foreach ($menus as $menu)
            @if ($menu->id >= 7 && $menu->id <= 12) {{-- ID 7-12 untuk Vegetarian --}}
                <div class="bg-[#E9A05E] p-8 rounded-3xl shadow-md w-[48%] h-60 flex justify-center items-center">
                    <a href="/detailMenu/{{ $menu->id }}">
                        <div class="flex space-x-4 items-center">
                            <img src="{{ $menu->image ?? '/default-image.png' }}" alt="makanan" class="w-16">
                            <div>
                                <h1 class="text-xl font-bold">{{ $menu->name }}</h1>
                                <p class="text-md font-medium">
                                    {{ explode('.', $menu->description)[0] }}.
                                </p>                                
                                <p class="text-lg font-semibold">Rp{{ number_format($menu->price, 0, ',', '.') }}/30 Hari</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</x-layout>
