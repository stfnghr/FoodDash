<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{$pageTitle}}</title>
</head>

<body class="bg-gradient-to-br from-[#F5E6DA] to-[#E9A05E] min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <!-- Kiri: Tulisan -->
        <div class="max-w-lg">
            <h1 class="text-6xl font-bold text-[#000000] leading-tight font-serif">FoodDash</h1>
            <h2 class="text-2xl font-serif text-[#000000] mt-4">CATERING</h2>
            <p class="text-lg font-serif text-[#000000] font-light mt-6">
                Where every meal is a celebration <br> of taste and togetherness.
            </p>
            <div class="mt-8 flex space-x-4">
                <!-- Sign Up Button -->
                <a href="/signup" class="bg-[#FDEEE6] text-[#000000] px-6 py-3 rounded-md font-bold shadow-md hover:shadow-lg">
                    SIGN UP
                </a>
                <!-- Log In Button -->
                <a href="/login" class="bg-[#FDEEE6] text-[#000000] px-6 py-3 rounded-md font-bold shadow-md hover:shadow-lg">
                    LOG IN
                </a>
            </div>
        </div>

        <!-- Kanan: Gambar -->
        <div class="w-1/2 flex justify-end">
            <img src="{{ asset('images/food-illustration.png') }}" alt="Food Illustration"
                class="max-w-md lg:max-w-lg transform translate-x-[-10%]"> <!-- Pindahkan gambar ke kiri -->
        </div>
    </div>

</body>
</html>