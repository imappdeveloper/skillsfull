<?php $__env->startSection('title','Features'); ?>



<?php $__env->startSection('content'); ?>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
<!-- <p>Form action: <?php echo e(route('feature.store')); ?></p> -->
    <!-- Stylish Feature Form -->
<div class="container mt-4">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><?php echo e(isset($feature) ? 'Update' : 'Add New'); ?> Feature</h5>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('feature.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="feature_id" value="<?php echo e($feature->id ?? ''); ?>">

                <div class="mb-3">
                    <label class="form-label">Feature Heading</label>
                    <input type="text" name="feature_heading" class="form-control" required
                           value="<?php echo e($feature->feature_heading ?? ''); ?>" placeholder="Enter feature title">
                </div>

                <div class="mb-3">
                    <label class="form-label">Feature Icon</label>
                    <input type="text" name="icon" class="form-control icp-auto"
                           value="<?php echo e($feature->icon ?? ''); ?>" data-placement="bottomRight" placeholder="e.g., fa fa-star">
                </div>

                <div class="mb-3">
                    <label class="form-label">Feature Description</label>
                    <textarea id="feature_description" name="feature_description" rows="4" class="form-control" required placeholder="Write a brief description..."><?php echo e($feature->feature_description ?? ''); ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" <?php echo e(isset($feature) && $feature->status ? 'selected' : ''); ?>>Active</option>
                        <option value="0" <?php echo e(isset($feature) && !$feature->status ? 'selected' : ''); ?>>Inactive</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-<?php echo e(isset($feature) ? 'primary' : 'success'); ?>">
                        <?php echo e(isset($feature) ? 'Update' : 'Add'); ?> Feature
                    </button>
                    <a href="<?php echo e(route('feature.list')); ?>" class="btn btn-outline-secondary">Back to List</a>
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


<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/feature_add.blade.php ENDPATH**/ ?>