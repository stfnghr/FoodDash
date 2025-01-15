<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>Edit Profile</x-slot:headTitle>

    <body class="bg-[#fcf5ee] font-serif min-h-screen flex flex-col">

        <!-- Main Content -->
        <main class="flex-grow flex justify-center items-center px-8 py-12">
            <!-- Content Wrapper -->
            <div
                class="flex flex-col md:flex-row items-start md:items-center space-y-12 md:space-y-0 md:space-x-16 w-full max-w-4xl">
                <!-- Profile Picture Section -->
                <div class="flex flex-col items-center md:items-center space-y-4">
                    <!-- Profile Picture -->
                    <div class="w-48 h-48 rounded-full bg-gray-300 mb-4 relative">
                        <img src="{{ asset('images/profile-pict.png') }}" alt="Avatar"
                            class="w-full h-full object-cover rounded-full">
                    </div>
                    <button type="button"
                        class="bg-[#d9905b] text-black font-semibold px-4 py-2 rounded hover:bg-[#c87f4e] transition mt-2 w-full md:w-auto">
                        Change Picture
                    </button>
                </div>
                <!-- Input Fields Section -->
                <div class="w-full max-w-2xl space-y-6 text-lg">
                    <h1 class="text-2xl font-bold text-[#000000] text-center">My Profile</h1>
                    <!-- Input Fields -->
                    <div>
                        <label for="name" class="block font-semibold mb-2">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name"
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#d9905b]">
                    </div>
                    <div>
                        <label for="username" class="block font-semibold mb-2">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username"
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#d9905b]">
                    </div>
                    <div>
                        <label for="phone" class="block font-semibold mb-2">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter your phone number"
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#d9905b]">
                    </div>
                    <div>
                        <label for="email" class="block font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#d9905b]">
                    </div>
                    <div>
                        <label for="address" class="block font-semibold mb-2">Address</label>
                        <textarea id="address" name="address" placeholder="Enter your address"
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#d9905b]"></textarea>
                    </div>
                    <div class="flex justify-center space-x-6 mt-6">
                        <button type="reset"
                            class="bg-[#d9625b] text-black font-semibold px-6 py-3 rounded shadow hover:bg-[#c8534e] transition">
                            Cancel
                        </button>
                        <button type="submit"
                            class="bg-[#d9905b] text-black font-semibold px-6 py-3 rounded shadow hover:bg-[#c87f4e] transition">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </main>

    </body>
</x-layout>
