<div class="sticky top-0 bg-[#E9A05E] text-black font-serif z-50 p-3 shadow-lg">
    <nav>
        <div class="ml-10 flex items-baseline space-x-4">
            <a href="/home"
                class="{{ request()->is('home') ? 'underline text-black' : 'text-white' }} rounded-md px-5 py-5 text-sm font-medium hover:text-black">
                HOME
            </a>

            <a href="/profile"
                class="{{ request()->is('profile') ? 'underline text-black' : 'text-white' }} rounded-md px-5 py-5 text-sm font-medium hover:text-black">
                PROFILE
            </a>

            <a href="/order"
                class="{{ request()->is('order') ? 'underline text-black' : 'text-white' }} rounded-md px-5 py-5 text-sm font-medium hover:text-black">
                ORDER
            </a>

            <a href="/about"
                class="{{ request()->is('about') ? 'underline text-black' : 'text-white' }} rounded-md px-5 py-5 text-sm font-medium hover:text-black">
                ABOUT
            </a>

            <img src="food-illustration.png" alt="logo">
        </div>
    </nav>
</div>