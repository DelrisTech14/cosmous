
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center">Product Page</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <div class="row">
            <div class="card-deck">
                <?php if(count($products) > 0): ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <img
                                src="<?php echo e($product->image); ?>"
                                alt="<?php echo e($product->name); ?>"
                                class="card-img-top"
                                height="400"
                            >
                            <div class="card-header">
                                <?php echo e($product->name); ?>

                                <span class="float-right"><?php echo e($product->amount_with_currency); ?></span>
                            </div>
                            <div class="card-body">
                                <p><?php echo $product->description; ?></p>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="<?php echo e(route('add-cart', [$product->id])); ?>"
                                    class="btn btn-success btn-block"
                                >Add To Cart</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\torch\resources\views/products.blade.php ENDPATH**/ ?>