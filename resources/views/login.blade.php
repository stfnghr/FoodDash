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
            <!-- Judul Log In -->
            <h1 class="text-4xl font-bold text-black absolute -top-8 left-1/2 transform -translate-x-1/2">
                Log In
            </h1>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="space-y-4 mt-4">
                    {{-- username --}}
                    <input 
                        type="text"  
                        name="username"
                        placeholder="Username"
                        class="w-full px-4 py-3 text-black placeholder-[#8E5F39] bg-[#E9A05E] border border-[#8E5F39] rounded-[20px] focus:outline-none focus:ring-2 focus:ring-black" 
                        value="{{ old('username') }}"
                        required />

                    {{-- password --}}
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

                <p class="mt-6 text-sm text-[#8E5F39] text-center">
                    Don’t have an account yet?
                    <a href="/signup" class="font-bold text-black underline hover:text-[#8E5F39]">Sign Up</a>
                </p>

                <button type="submit" class="w-full px-4 py-3 mt-6 text-[#B97C5C] bg-[#FDEEE6] font-bold rounded-[20px] shadow-md hover:shadow-lg">
                    LOG IN
                </button>
            </form>
        </div>
    </div>
</body>
</html>