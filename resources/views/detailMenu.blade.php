<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>{{ $menu->name }}</x-slot:headTitle>

    <div class="flex space-x-4 mt-5 p-10">
        {{-- Bagian Foto --}}
        <div class="w-1/3 h-auto flex justify-items-center flex-col">
            <img src="{{ $menu->image ?? '/default-image.png' }}" alt="{{ $menu->name }}"
                class="w-full h-48 object-cover rounded-xl">
            <div class="bg-[#E9A05E] w-max p-3 mt-5 flex justify-items-center rounded-2xl">
                <a href="/checkout/{{ $menu->id }}">
                    <h1 class="font-bold">Pesan Sekarang</h1>
                </a>
            </div>
        </div>


        {{-- Bagian Deskripsi --}}
        <div class="w-2/3 h-auto">
            <h1 class="text-3xl font-bold">{{ $menu->name }}</h1>
            <p class="mt-3">{{ $menu->description }}</p>
            <p class="font-bold pt-3">Isi Paket:</p>
            <ul class="list-disc pl-5">
                @foreach ($menu->details as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>
