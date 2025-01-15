<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>About</x-slot:headTitle>

    <main class="flex flex-col items-center flex-grow px-8 mb-20">
        <h1 class="text-3xl font-bold text-center mt-8 mb-16">About Us</h1>

        <div class="flex flex-col lg:flex-row items-center lg:items-start lg:space-x-16 space-y-12 lg:space-y-0">
            <div class="flex-shrink-0 w-72 h-72 rounded-lg overflow-hidden">
                <img src="{{ asset('images/about-us-image.png') }}" alt="About Us Image"
                    class="w-full h-full object-cover">
            </div>
            <div class="text-center lg:text-left max-w-lg">
                <p class="text-lg leading-relaxed mb-6">
                    Founded in 2015 in Yogyakarta, Indonesia, FoodDash Catering began as a small venture
                    inspired by his love for cooking and the joy of sharing food. Starting with small orders for friends
                    and neighbors, the business quickly gained recognition for its flavorful, high-quality, and
                    affordable Indonesian dishes, leading to the opening of its first kitchen in 2018.
                </p>
                <p class="text-lg leading-relaxed">
                    Today, FoodDash Catering is a trusted name for weddings, corporate events, and family gatherings,
                    offering six thoughtfully crafted vegetarian and non-vegetarian packages to suit diverse tastes and
                    dietary needs. Each menu, prepared with fresh ingredients and a balance of traditional and
                    contemporary flavors, reflects the company’s mission of "bringing blessings to every table" and
                    ensures every meal leaves a lasting impression.
                </p>
            </div>
        </div>

        <section class="bg-[#fcead8] mt-16 py-12 px-8 rounded-lg shadow-md w-full max-w-4xl">
            <h2 class="text-2xl font-bold text-center mb-8">Why Choose Us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/free-delivery-icon.png') }}" alt="Free Delivery" class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-bold">Free Delivery</h3>
                    <p class="text-center text-sm text-gray-600">Enjoy free delivery for all your orders within the
                        service area.</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/fresh-ingredients-icon.png') }}" alt="Fresh Ingredients"
                        class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-bold">Fresh Ingredients</h3>
                    <p class="text-center text-sm text-gray-600">We use only the freshest ingredients to prepare every
                        dish.</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/trusted-service-icon.png') }}" alt="Trusted Service"
                        class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-bold">Trusted Service</h3>
                    <p class="text-center text-sm text-gray-600">Rely on us to make your events special with our trusted
                        service.</p>
                </div>
            </div>
        </section>
    </main>
</x-layout>
