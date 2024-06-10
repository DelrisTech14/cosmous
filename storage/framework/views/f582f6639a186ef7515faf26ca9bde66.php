
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>expert List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-between align-items-center ">
        <h1>expert List</h1>
        <div>
            <a href="<?php echo e(route('expert.index')); ?>" class="btn btn-primary">Add expert</a>
        </div>
    </div>

    <form method="GET" action="<?php echo e(route('expert.view')); ?>" class="form-inline mb-3">
        <div class="form-group mr-2">
            <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo e(request('search')); ?>">
        </div>
        <div class="form-group mr-2">
            <select name="status" class="form-control">
                <option value="">All</option>
                <option value="active" <?php echo e(request('status') == 'active' ? 'selected' : ''); ?>>Active</option>
                <option value="inactive" <?php echo e(request('status') == 'inactive' ? 'selected' : ''); ?>>deactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $experts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($expert->id); ?></td>
                    <td><?php echo e($expert->name); ?></td>
                    <td><?php echo e($expert->description); ?></td>
                    <td><img src="<?php echo e(asset('images/' . $expert->image)); ?>" alt="<?php echo e($expert->title); ?>" width="100"></td>
                    <td>
                    
                <span >
                    <?php if($expert->status == 'active'): ?>
                        <span class="badge bg-success">Active</span>
                    <?php else: ?>
                        <span class="badge bg-danger">Deactive</span>
                    <?php endif; ?>
                </span>

                     </td>

                    <td>
                        <a href="<?php echo e(route('expert.edit', $expert->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('expert.delete', $expert->id)); ?>" method="POST" style="display:inline-block;">
                            <!--<?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this expert?')">Delete</button>-->
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const statusToggle = document.getElementById("statusToggle");
        const statusInput = document.getElementById("status");

        statusToggle.addEventListener("change", function() {
            if (statusToggle.checked) {
                statusInput.value = "active";
            } else {
                statusInput.value = "inactive";
            }
        });
    });
</script>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\torch\resources\views/expert/view.blade.php ENDPATH**/ ?>