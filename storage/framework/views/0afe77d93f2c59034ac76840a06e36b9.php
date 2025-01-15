<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('layoutTitle', null, []); ?> <?php echo e($pageTitle); ?> <?php $__env->endSlot(); ?>
     <?php $__env->slot('headTitle', null, []); ?> Profile <?php $__env->endSlot(); ?>

    <main class="flex flex-col justify-center items-center flex-grow px-8">
        <h1 class="text-3xl font-bold text-center mb-16">My Profile</h1>

        <!-- Profile Content -->
        <div class="flex flex-col md:flex-row items-center md:items-start space-y-12 md:space-y-0 md:space-x-24">
            <!-- Left Section: Avatar and Username -->
            <div class="flex flex-col items-center">
                <div class="w-40 h-40 rounded-full bg-gray-300 mb-4">
                    <img src="<?php echo e(asset('images/profile-pict.png')); ?>" alt="Avatar" class="w-full h-full object-cover rounded-full">
                </div>
                <p class="text-lg text-[#000] font-bold"></p>
            </div>

            <!-- Right Section: Profile Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-12 text-lg">
                <div>
                    <p class="font-semibold">Name:</p>
                    <p><?php echo e($customer->name); ?></p>
                </div>
                <div>
                    <p class="font-semibold">Phone Number:</p>
                    <p><?php echo e($customer->phone); ?></p>
                </div>
                <div>
                    <p class="font-semibold">Email:</p>
                    <p><?php echo e($user->email); ?></p>
                </div>
                <div>
                    <p class="font-semibold">Address:</p>
                    <p><?php echo nl2br(e($customer->address)); ?></p>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH /Users/stefanieagahari/Herd/WD_ALP/resources/views/profile.blade.php ENDPATH**/ ?>