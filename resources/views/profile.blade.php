<x-layout>
    <x-slot:layoutTitle>{{$pageTitle}}</x-slot:layoutTitle>
    <x-slot:headTitle>Profil</x-slot:headTitle>

    <main class="flex flex-col justify-center items-center flex-grow px-8">
        <h1 class="text-3xl font-bold text-center mb-16">Profil Saya</h1>

        <!-- Profile Content -->
        <div class="flex flex-col md:flex-row items-center md:items-start space-y-12 md:space-y-0 md:space-x-24">
            <!-- Left Section: Avatar and Username -->
            <div class="flex flex-col items-center">
                <div class="w-40 h-40 rounded-full bg-gray-300 mb-4">
                    <img src="{{ asset('images/profile-pict.png') }}" alt="Avatar" class="w-full h-full object-cover rounded-full">
                </div>
                <p class="text-lg text-[#000] font-bold"></p>
            </div>

            <!-- Right Section: Profile Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-12 text-lg">
                <div>
                    <p class="font-semibold">Nama:</p>
                    <p>{{ $customer->name }}</p>
                </div>
                <div>
                    <p class="font-semibold">Nomor Telepon:</p>
                    <p>{{ $customer->phone }}</p>
                </div>
                <div>
                    <p class="font-semibold">Email:</p>
                    <p>{{ $user->email }}</p>
                </div>
                <div>
                    <p class="font-semibold">Alamat:</p>
                    <p>{!! nl2br(e($customer->address)) !!}</p>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-center space-x-12 mt-16">
            <a href="/editProfile">
                <button class="bg-[#d9905b] text-black font-semibold px-6 py-4 rounded-xl shadow hover:bg-[#c87f4e] transition">
                    Edit Profile
                </button>
            </a>
            <a href="">
                <button class="bg-[#d9625b] text-black font-semibold px-6 py-4 rounded-xl shadow hover:bg-[#c8534e] transition">
                    Log Out
                </button>
            </a>
        </div>
    </main>
</x-layout>