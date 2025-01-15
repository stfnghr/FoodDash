<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title><?php echo e($pageTitle); ?></title>
</head>

<body class="min-h-screen flex">

    <!-- Bagian Kiri -->
    <div class="w-1/2 bg-[#d9905b] flex items-center justify-center">
        <div class="text-center px-10">
            <p class="text-xl text-white font-serif mb-2">Welcome to</p>
            <h1 class="text-5xl font-bold text-white font-serif leading-tight">FoodDash <br> Catering!</h1>
        </div>
    </div>

    <!-- Bagian Kanan -->
    <div class="w-1/2 bg-[#fceee5] flex items-center justify-center">
        <!-- Form menggunakan POST untuk mengirim data ke server -->
        <form method="POST" action="<?php echo e(route('register')); ?>" class="space-y-6 w-[60%]">
            <?php echo csrf_field(); ?>
            <!-- Nama -->
            <div>
                <label for="name" class="block text-md font-serif mb-2">NAME</label>
                <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required
                    class="w-full px-4 py-3 border border-[#9e7f65] rounded-md bg-[#fcf8f2] text-[#000] focus:outline-none focus:ring-2 focus:ring-[#d9905b]">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-red-500 text-xs mt-1"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        
            <!-- Alamat -->
            <div>
                <label for="address" class="block text-md font-serif mb-2">ADDRESS</label>
                <textarea id="address" name="address" rows="4" required
                    class="w-full px-4 py-3 border border-[#9e7f65] rounded-md bg-[#fcf8f2] text-[#000] focus:outline-none focus:ring-2 focus:ring-[#d9905b]"><?php echo e(old('address')); ?></textarea>
                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-red-500 text-xs mt-1"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        
            <!-- Nomor Telepon -->
            <div>
                <label for="phone" class="block text-md font-serif mb-2">PHONE NUMBER</label>
                <input type="text" id="phone" name="phone" value="<?php echo e(old('phone')); ?>" required
                    class="w-full px-4 py-3 border border-[#9e7f65] rounded-md bg-[#fcf8f2] text-[#000] focus:outline-none focus:ring-2 focus:ring-[#d9905b]">
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-red-500 text-xs mt-1"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        
            <!-- Register Button -->
            <button type="submit"
                class="bg-[#d9905b] font-serif text-[#000] px-6 py-3 rounded-md shadow-md hover:shadow-lg font-bold tracking-wide transition duration-300">
                REGISTER
            </button>
        </form>
    </div>

</body>

</html>
<?php /**PATH /Users/stefanieagahari/Herd/WD_ALP/resources/views/register.blade.php ENDPATH**/ ?>