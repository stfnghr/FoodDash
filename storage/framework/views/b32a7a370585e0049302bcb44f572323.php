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
     <?php $__env->slot('headTitle', null, []); ?> Home <?php $__env->endSlot(); ?>
    
    <h1 class="text-3xl p-5 text-center font-bold">PACKAGES</h1>

    
    <h2 class="text-xl font-semibold mt-10">NON-VEGETARIAN</h2>
    <div class="flex flex-wrap gap-4 mt-5 px-10">
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($menu->id >= 1 && $menu->id <= 6): ?> 
                <div class="bg-[#E9A05E] p-8 rounded-3xl shadow-md w-[48%] h-60 flex justify-center items-center">
                    <a href="/detailMenu/<?php echo e($menu->id); ?>">
                        <div class="flex space-x-4 items-center">
                            <img src="<?php echo e($menu->image ?? '/default-image.jpg'); ?>" alt="food" class="w-16">
                            <div>
                                <h1 class="text-xl font-bold"><?php echo e($menu->name); ?></h1>
                                <p class="text-md font-medium">
                                    <?php echo e(explode('.', $menu->description)[0]); ?>.
                                </p>
                                <p class="text-lg font-semibold">Rp<?php echo e(number_format($menu->price, 0, ',', '.')); ?>/30 Days</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
    <h2 class="text-xl font-semibold mt-20">VEGETARIAN</h2>
    <div class="flex flex-wrap gap-4 mt-5 px-10">
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($menu->id >= 7 && $menu->id <= 12): ?> 
                <div class="bg-[#E9A05E] p-8 rounded-3xl shadow-md w-[48%] h-60 flex justify-center items-center">
                    <a href="/detailMenu/<?php echo e($menu->id); ?>">
                        <div class="flex space-x-4 items-center">
                            <img src="<?php echo e($menu->image ?? '/default-image.jpg'); ?>" alt="food" class="w-16">
                            <div>
                                <h1 class="text-xl font-bold"><?php echo e($menu->name); ?></h1>
                                <p class="text-md font-medium">
                                    <?php echo e(explode('.', $menu->description)[0]); ?>.
                                </p>                                
                                <p class="text-lg font-semibold">Rp<?php echo e(number_format($menu->price, 0, ',', '.')); ?>/30 Days</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH /Users/stefanieagahari/Herd/WD_ALP/resources/views/home.blade.php ENDPATH**/ ?>