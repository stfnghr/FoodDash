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
     <?php $__env->slot('headTitle', null, []); ?> Order <?php $__env->endSlot(); ?>

    <?php
        $order = session('order'); // Ambil data dari session
    ?>

    <?php if($order && isset($order['id'])): ?>
        <a href="/orderDetail/<?php echo e($order['id']); ?>">
            <div class="border border-black rounded-xl p-3">
                <div class="flex justify-evenly items-center p-5">
                    <div>
                        <img src="<?php echo e($menu->image ?? '/default-image.jpg'); ?>" alt="<?php echo e($menu->name); ?>" class="w-20">
                    </div>

                    <div class="text-left">
                        <h1 class="text-3xl font-bold"><?php echo e($menu->name); ?></h1>
                        <p class="py-3"><?php echo e($order['start_date']); ?> - <?php echo e($order['end_date']); ?></p>
                        <p class="text-green-600"><?php echo e($order['payment_status'] == 'paid' ? 'Paid' : 'Unpaid'); ?></p>
                    </div>
                </div>
            </div>
        </a>
    <?php else: ?>
        <p>No orders available.</p> 
    <?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH /Users/stefanieagahari/Herd/WD_ALP/resources/views/order.blade.php ENDPATH**/ ?>