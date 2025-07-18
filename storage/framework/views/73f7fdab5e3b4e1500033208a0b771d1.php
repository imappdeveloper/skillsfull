<?php $__env->startSection('title','Service'); ?>


<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
<!-- <p>Form action: <?php echo e(route('feature.store')); ?></p> -->
   <div class="container mt-2">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><?php echo e(isset($service) ? 'Update' : 'Add New'); ?> Service</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="<?php echo e(route('service.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="service_id" value="<?php echo e($service->id ?? ''); ?>">

                <!-- Service Name -->
                <div class="mb-3">
                    <label class="form-label">Service Name</label>
                    <input type="text" name="service_name" class="form-control" required
                           value="<?php echo e($service->service_name ?? ''); ?>" placeholder="Enter service name">
                </div>

                <!-- Service Image -->
                <div class="mb-3">
                    <label class="form-label">Service Image</label><br>
                    <?php if(!empty($service->service_image)): ?>
                        <img src="<?php echo e(asset('storage/' . $service->service_image)); ?>" class="mb-2 rounded border" style="width: 100px; height: auto;">
                    <?php endif; ?>
                    <input type="file" name="service_image" class="form-control mt-2">
                </div>

                <!-- Service Description -->
                <div class="mb-3">
                    <label class="form-label">Service Description</label>
                    <textarea name="service_description" class="form-control" rows="4" required placeholder="Enter a brief description..."><?php echo e($service->service_description ?? ''); ?></textarea>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" <?php echo e(isset($service) && $service->status ? 'selected' : ''); ?>>Active</option>
                        <option value="0" <?php echo e(isset($service) && !$service->status ? 'selected' : ''); ?>>Inactive</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button class="btn btn-<?php echo e(isset($service) ? 'primary' : 'success'); ?>" type="submit">
                        <?php echo e(isset($service) ? 'Update' : 'Add'); ?> Service
                    </button>
                    <a href="<?php echo e(route('service.index')); ?>" class="btn btn-outline-secondary">Back to List</a>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
    </div>
</div>

<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/service_add.blade.php ENDPATH**/ ?>