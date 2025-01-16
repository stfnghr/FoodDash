<div class="sticky top-0 bg-[#E9A05E] text-black font-serif z-50 p-3 shadow-lg">
    <nav class="flex justify-between items-center">
        <!-- Menu Kiri -->
        <div class="ml-10 flex items-baseline space-x-4">
            <a href="/"
                class="{{ request()->is('home') ? 'underline text-black' : 'text-white' }} rounded-md px-5 py-5 text-sm font-medium hover:text-black">
                Beranda
            </a>

            @auth
                <a href="/profile"
                    class="{{ request()->is('profile') ? 'underline text-black' : 'text-white' }} rounded-md px-5 py-5 text-sm font-medium hover:text-black">
                    Profil
                </a>
            @endauth

            @guest
                <a href="/landing" class="text-white rounded-md px-5 py-5 text-sm font-medium hover:text-black">
                    Profil
                </a>
            @endguest

            <a href="/order"
                class="{{ request()->is('order') ? 'underline text-black' : 'text-white' }} rounded-md px-5 py-5 text-sm font-medium hover:text-black">
                Pesanan
            </a>

            <a href="/about"
                class="{{ request()->is('about') ? 'underline text-black' : 'text-white' }} rounded-md px-5 py-5 text-sm font-medium hover:text-black">
                Tentang
            </a>
        </div>

        <!-- Logo di sisi kanan -->
        <div class="mr-10">
            <img src="{{ asset('images/fooddash-logo.png') }}" alt="Logo" class="w-10">
        </div>
    </nav>
</div>
