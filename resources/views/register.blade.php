<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $pageTitle }}</title>
</head>

<body class="min-h-screen flex">

    <!-- Bagian Kiri -->
    <div class="w-1/2 bg-[#d9905b] flex items-center justify-center">
        <div class="text-center px-10">
            <p class="text-xl text-white font-serif mb-2">Selamat datang di</p>
            <h1 class="text-5xl font-bold text-white font-serif leading-tight">FoodDash <br> Catering!</h1>
        </div>
    </div>

    <!-- Bagian Kanan -->
    <div class="w-1/2 bg-[#fceee5] flex items-center justify-center">
        <!-- Form menggunakan POST untuk mengirim data ke server -->
        <form method="POST" action="{{ route('register') }}" class="space-y-6 w-[60%]">
            @csrf
            <!-- Nama -->
            <div>
                <label for="name" class="block text-md font-serif mb-2">NAMA</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="w-full px-4 py-3 border border-[#9e7f65] rounded-md bg-[#fcf8f2] text-[#000] focus:outline-none focus:ring-2 focus:ring-[#d9905b]">
                @error('name')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Alamat -->
            <div>
                <label for="address" class="block text-md font-serif mb-2">ALAMAT</label>
                <textarea id="address" name="address" rows="4" required
                    class="w-full px-4 py-3 border border-[#9e7f65] rounded-md bg-[#fcf8f2] text-[#000] focus:outline-none focus:ring-2 focus:ring-[#d9905b]">{{ old('address') }}</textarea>
                @error('address')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Nomor Telepon -->
            <div>
                <label for="phone" class="block text-md font-serif mb-2">NOMOR TELEPON</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required
                    class="w-full px-4 py-3 border border-[#9e7f65] rounded-md bg-[#fcf8f2] text-[#000] focus:outline-none focus:ring-2 focus:ring-[#d9905b]">
                @error('phone')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Tombol Daftar -->
            <button type="submit"
                class="bg-[#d9905b] font-serif text-[#000] px-6 py-3 rounded-md shadow-md hover:shadow-lg font-bold tracking-wide transition duration-300">
                DAFTAR
            </button>
        </form>
    </div>

</body>

</html>
