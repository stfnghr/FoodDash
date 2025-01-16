<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $pageTitle }}</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-[#FDEEE6] font-serif">
        <div class="w-[400px] bg-[#E9A05E] p-8 rounded-[50px] shadow-md relative">
            <!-- Judul Sign Up -->
            <h1 class="text-4xl font-bold text-black absolute -top-8 left-1/2 transform -translate-x-1/2">
                Sign Up
            </h1>

            <!-- Formulir Sign Up -->
            <form action="{{ route('signup') }}" method="POST">
                @csrf <!-- Token keamanan Laravel -->
                <div class="space-y-4 mt-4">
                    <!-- Input Username -->
                    <input 
                        type="text" 
                        name="username" 
                        placeholder="Username"
                        class="w-full px-4 py-3 text-black placeholder-[#8E5F39] bg-[#E9A05E] border border-[#8E5F39] rounded-[20px] focus:outline-none focus:ring-2 focus:ring-black" 
                        {{-- value="{{ old('username') }}"  --}}
                        required />

                    <!-- Input Email -->
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email"
                        class="w-full px-4 py-3 text-black placeholder-[#8E5F39] bg-[#E9A05E] border border-[#8E5F39] rounded-[20px] focus:outline-none focus:ring-2 focus:ring-black" 
                        {{-- value="{{ old('email') }}"  --}}
                        required />

                    <!-- Input Password -->
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password"
                        class="w-full px-4 py-3 text-black placeholder-[#8E5F39] bg-[#E9A05E] border border-[#8E5F39] rounded-[20px] focus:outline-none focus:ring-2 focus:ring-black" 
                        required />
                </div>

                <!-- Pesan Error -->
                @if ($errors->any())
                    <div class="bg-red-100 text-red-600 p-4 rounded mt-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Tautan ke Log In -->
                <p class="mt-6 text-sm text-[#8E5F39] text-center">
                    Sudah memiliki akun?
                    <a href="/login" class="font-bold text-black underline hover:text-[#8E5F39]">Log In</a>
                </p>

                <!-- Tombol Submit -->
                <button
                    type="submit" class="w-full px-4 py-3 mt-6 text-[#000000] bg-[#FDEEE6] font-bold rounded-[20px] shadow-md hover:shadow-lg">
                    SIGN UP
                </button>
            </form>
        </div>
    </div>
</body>

</html>
