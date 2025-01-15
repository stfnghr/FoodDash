<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title><?php echo e($headTitle); ?></title>
</head>

<body class="bg-[#FFF7F1] font-serif">
    <div class="min-h-full">
        <?php if (isset($component)) { $__componentOriginalcd6dfa97cd4704d24f53bf5968f88fee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd6dfa97cd4704d24f53bf5968f88fee = $attributes; } ?>
<?php $component = App\View\Components\Navigation::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navigation::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd6dfa97cd4704d24f53bf5968f88fee)): ?>
<?php $attributes = $__attributesOriginalcd6dfa97cd4704d24f53bf5968f88fee; ?>
<?php unset($__attributesOriginalcd6dfa97cd4704d24f53bf5968f88fee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd6dfa97cd4704d24f53bf5968f88fee)): ?>
<?php $component = $__componentOriginalcd6dfa97cd4704d24f53bf5968f88fee; ?>
<?php unset($__componentOriginalcd6dfa97cd4704d24f53bf5968f88fee); ?>
<?php endif; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <?php echo e($slot); ?> 
            </div>
        </main>
        <?php if (isset($component)) { $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $attributes; } ?>
<?php $component = App\View\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Footer::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $attributes = $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $component = $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
    </div>
</body>
</html><?php /**PATH /Users/stefanieagahari/Herd/WD_ALP/resources/views/components/layout.blade.php ENDPATH**/ ?>