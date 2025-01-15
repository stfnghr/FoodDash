<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    
    <title>Sign Up</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-[#FDEEE6] font-serif">
        <div class="w-[400px] bg-[#E9A05E] p-8 rounded-[50px] shadow-md relative">
            <!-- Judul Sign Up -->
            <h1 class="text-4xl font-bold text-black absolute -top-8 left-1/2 transform -translate-x-1/2">
                Sign Up
            </h1>

            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="space-y-4 mt-4">
                    <input type="text" placeholder="Username"
                        class="w-full px-4 py-3 text-black placeholder-[#8E5F39] bg-[#E9A05E] border border-[#8E5F39] rounded-[20px] focus:outline-none focus:ring-2 focus:ring-black" />
                    <input type="email" placeholder="Email"
                        class="w-full px-4 py-3 text-black placeholder-[#8E5F39] bg-[#E9A05E] border border-[#8E5F39] rounded-[20px] focus:outline-none focus:ring-2 focus:ring-black" />
                    <input type="password" placeholder="Password"
                        class="w-full px-4 py-3 text-black placeholder-[#8E5F39] bg-[#E9A05E] border border-[#8E5F39] rounded-[20px] focus:outline-none focus:ring-2 focus:ring-black" />
                </div>

                <p class="mt-6 text-sm text-[#8E5F39] text-center">
                    Already have an account?
                    <a href="/login" class="font-bold text-black underline hover:text-[#8E5F39]">Log In</a>
                </p>

                <button
                    type="submit" class="w-full px-4 py-3 mt-6 text-[#000000] bg-[#FDEEE6] font-bold rounded-[20px] shadow-md hover:shadow-lg">
                    <a href="/register">SIGN UP</a>
                </button>
            </form>

        </div>
    </div>
</body>

</html>
<?php /**PATH /Users/stefanieagahari/Herd/WD_ALP/resources/views/signUp.blade.php ENDPATH**/ ?>