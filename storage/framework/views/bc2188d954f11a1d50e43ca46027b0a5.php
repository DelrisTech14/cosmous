
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Laravel E-Commerce</title>
</head>
<body>
    <h1>Products</h1>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <h2><?php echo e($product->name); ?></h2>
            <p><?php echo e($product->quantity); ?></p>
            <p>$<?php echo e($product->price); ?></p>
            <img src="<?php echo e($product->image); ?>" width="100" height="100" />
            <form action="<?php echo e(route('cart.store',$product->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <input type="number" name="quantity" value="1">
                <button type="submit">Add to Cart</button>
            </form>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\torch\resources\views/cart/view.blade.php ENDPATH**/ ?>