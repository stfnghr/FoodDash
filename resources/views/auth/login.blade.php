<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Log In</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-[#FDEEE6] font-serif">
        <div class="w-[400px] bg-[#E9A05E] p-8 rounded-[50px] shadow-md relative">
            <!-- Judul Log In -->
            <h1 class="text-4xl font-bold text-black absolute -top-8 left-1/2 transform -translate-x-1/2">
                Log In
            </h1>

            <!-- Form Login -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="space-y-4 mt-4">
                    <!-- Username -->
                    <input 
                        type="username" 
                        id="username" 
                        name="username" 
                        placeholder="Username" 
                        class="w-full px-4 py-3 text-black placeholder-[#8E5F39] bg-[#E9A05E] border border-[#8E5F39] rounded-[20px] focus:outline-none focus:ring-2 focus:ring-black" 
                        value="{{ old('username') }}" 
                        required 
                        autofocus
                        autocomplete="username" />

                    <!-- Password -->
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Password" 
                        class="w-full px-4 py-3 text-black placeholder-[#8E5F39] bg-[#E9A05E] border border-[#8E5F39] rounded-[20px] focus:outline-none focus:ring-2 focus:ring-black" 
                        required 
                        autocomplete="current-password" />
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

                <!-- Remember Me -->
                <div class="mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input 
                            id="remember_me" 
                            type="checkbox" 
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Forgot Password -->
                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:text-gray-900 underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <!-- Sign Up Redirect -->
                <p class="mt-6 text-sm text-[#8E5F39] text-center">
                    Don’t have an account yet?
                    <a href="/signup" class="font-bold text-black underline hover:text-[#8E5F39]">Sign Up</a>
                </p>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full px-4 py-3 mt-6 text-[#B97C5C] bg-[#FDEEE6] font-bold rounded-[20px] shadow-md hover:shadow-lg">
                    LOG IN
                </button>
            </form>
        </div>
    </div>
</body>
</html>
