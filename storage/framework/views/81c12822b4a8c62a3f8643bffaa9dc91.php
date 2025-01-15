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
     <?php $__env->slot('headTitle', null, []); ?> <?php echo e($menu->name); ?> <?php $__env->endSlot(); ?>

    <div class="flex space-x-4 mt-5 p-10">
        
        <div class="w-1/3 h-auto flex justify-items-center flex-col">
            <img src="<?php echo e($menu->image ?? '/default-image.jpg'); ?>" alt="<?php echo e($menu->name); ?>"
                class="w-full h-48 object-cover rounded-xl">
            <div class="bg-[#E9A05E] w-max p-3 mt-5 flex justify-items-center rounded-2xl">
                <a href="/checkout/<?php echo e($menu->id); ?>">
                    <h1 class="font-bold">Order Now</h1>
                </a>
            </div>
        </div>


        
        <div class="w-2/3 h-auto">
            <h1 class="text-3xl font-bold"><?php echo e($menu->name); ?></h1>
            <p class="mt-3"><?php echo e($menu->description); ?></p>
            <p class="font-bold pt-3">Isi Paket:</p>
            <ul class="list-disc pl-5">
                <?php $__currentLoopData = $menu->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($item); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
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
<?php endif; ?><?php /**PATH /Users/stefanieagahari/Herd/WD_ALP/resources/views/detailMenu.blade.php ENDPATH**/ ?>