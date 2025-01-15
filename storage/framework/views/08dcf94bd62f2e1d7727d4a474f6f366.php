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
     <?php $__env->slot('headTitle', null, []); ?> Checkout <?php $__env->endSlot(); ?>

    <h1 class="text-3xl p-5 text-center font-bold">CHECKOUT</h1>
    <form action="<?php echo e(route('checkout.save')); ?>" method="POST">
    
        <?php echo csrf_field(); ?>
        <input type="hidden" name="menu_id" value="<?php echo e($menu->id); ?>">
        <input type="hidden" name="start_date" value="<?php echo e($startDate); ?>">
        <input type="hidden" name="end_date" value="<?php echo e($endDate); ?>">
        
        
        <div class="flex space-x-4 mt-5 px-5">
            <div class="flex w-2/3 h-max border border-black rounded-xl">
                <div class="p-8">
                    <h1 class="font-bold">Shipment to:</h1>
                    <p class="pb-3">John Doe</p>

                    <h1 class="font-bold">Shipment Address:</h1>
                    <p>301 Apple Wood St.</p>
                    <p>Surabaya</p>
                    <p class="pb-3">60286</p>

                    <h1 class="font-bold">Phone Number:</h1>
                    <p class="pb-3">+62 856 7892 3456</p>

                    <h1 class="font-bold">Package:</h1>
                    <div class="flex items-center space-x-4">
                        <input type="number" id="quantity" name="quantity" min="1" value="1"
                            class="w-16 p-2 border rounded-md text-center" onchange="updatePrice()">
                        <p class="pb-3"><?php echo e($menu->name); ?></p>
                    </div>
                </div>

                <div class="p-8">
                    <h1 class="font-bold">Subscription Start:</h1>
                    <p class="pb-3"><?php echo e($startDate); ?></p>

                    <h1 class="font-bold">Subscription End:</h1>
                    <p class="pb-3"><?php echo e($endDate); ?></p>

                    <h1 class="font-bold pb-3">Notes:</h1>
                    <textarea
                        class="w-max h-max border border-black rounded-lg p-3 text-black focus:outline-none focus:ring-2 focus:ring-yellow-600"
                        placeholder="Add your notes here..."></textarea>
                </div>
            </div>

            <div class="w-1/3 h-max border border-black p-8 rounded-xl">
                <h1 class="font-bold mb-3">Summary</h1>
                <div class="flex justify-between">
                    <div class="text-left">
                        <p>Sub-total</p>
                        <p>Shipping</p>
                        <h1 class="font-bold my-3">TOTAL</h1>
                    </div>

                    <div class="text-right">
                        <p>Rp<?php echo e(number_format($menu->price / 30, 0, ',', '.')); ?></p>
                        <p>Free</p>
                        <h1 class="font-bold my-3" id="totalPrice">Rp<?php echo e(number_format($menu->price, 0, ',', '.')); ?></h1>
                    </div>

                    <script>
                        function updatePrice() {
                            var quantity = document.getElementById('quantity').value;
                            var pricePerMonth = <?php echo e($menu->price); ?>;
                            var totalPrice = pricePerMonth * quantity;
                            document.getElementById('totalPrice').innerText = 'Rp' + totalPrice.toLocaleString('id-ID');
                        }
                    </script>
                </div>

                <h1 class="font-bold mt-5 mb-2">Select payment method:</h1>
                <select name="payment_method" id="payment_method"
                    class="border rounded px-4 py-2 mb-5 focus:outline-none focus:ring-2 focus:ring-yellow-600">
                    <option value="" disabled selected>-- Select --</option>
                    <option value="linkaja">LinkAja</option>
                    <option value="ovo">OVO</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>

                <div class="bg-[#E9A05E] bottom-0 inset-0 p-3 flex justify-center items-center rounded-2xl mx-auto">
                    <button type="submit" class="font-bold">Confirm Order</button>
                </div>
            </div>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH /Users/stefanieagahari/Herd/WD_ALP/resources/views/checkout.blade.php ENDPATH**/ ?>