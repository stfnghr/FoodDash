<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>Tentang</x-slot:headTitle>

    <main class="flex flex-col items-center flex-grow px-8 mb-20">
        <h1 class="text-3xl font-bold text-center mt-8 mb-16">Tentang Kami</h1>

        <div class="flex flex-col lg:flex-row items-center lg:items-start lg:space-x-16 space-y-12 lg:space-y-0">
            <div class="flex-shrink-0 w-72 h-72 rounded-lg overflow-hidden">
                <img src="{{ asset('images/about-us-image.png') }}" alt="Gambar Tentang Kami"
                    class="w-full h-full object-cover">
            </div>
            <div class="text-center lg:text-left max-w-lg">
                <p class="text-lg leading-relaxed mb-6">
                    Didirikan pada tahun 2015 di Yogyakarta, Indonesia, FoodDash Catering berawal dari sebuah usaha kecil
                    yang terinspirasi oleh kecintaan pemiliknya pada memasak dan kebahagiaan berbagi makanan. Dimulai
                    dengan pesanan kecil untuk teman dan tetangga, bisnis ini dengan cepat dikenal berkat hidangan
                    Indonesia yang lezat, berkualitas tinggi, dan terjangkau, hingga akhirnya membuka dapur pertamanya
                    pada tahun 2018.
                </p>
                <p class="text-lg leading-relaxed">
                    Saat ini, FoodDash Catering adalah nama terpercaya untuk pernikahan, acara perusahaan, dan pertemuan
                    keluarga, menawarkan enam paket vegetarian dan non-vegetarian yang dirancang dengan cermat untuk
                    memenuhi berbagai selera dan kebutuhan diet. Setiap menu, disiapkan dengan bahan-bahan segar serta
                    perpaduan rasa tradisional dan modern, mencerminkan misi perusahaan: "membawa berkah ke setiap meja"
                    dan memastikan setiap hidangan meninggalkan kesan yang mendalam.
                </p>
            </div>
        </div>

        <section class="bg-[#fcead8] mt-16 py-12 px-8 rounded-lg shadow-md w-full max-w-4xl">
            <h2 class="text-2xl font-bold text-center mb-8">Mengapa Memilih Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/free-delivery-icon.png') }}" alt="Pengiriman Gratis"
                        class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-bold">Pengiriman Gratis</h3>
                    <p class="text-center text-sm text-gray-600">Nikmati pengiriman gratis untuk semua pesanan Anda
                        di dalam area layanan kami.</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/fresh-ingredients-icon.png') }}" alt="Bahan Segar"
                        class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-bold">Bahan Segar</h3>
                    <p class="text-center text-sm text-gray-600">Kami hanya menggunakan bahan-bahan segar untuk
                        menyiapkan setiap hidangan.</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/trusted-service-icon.png') }}" alt="Layanan Terpercaya"
                        class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-bold">Layanan Terpercaya</h3>
                    <p class="text-center text-sm text-gray-600">Percayakan kepada kami untuk menjadikan acara Anda
                        istimewa dengan layanan yang dapat diandalkan.</p>
                </div>
            </div>
        </section>
    </main>
</x-layout>
