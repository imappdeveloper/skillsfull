<?php $__env->startSection('title','Service'); ?>


<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    <h2><?php echo e(isset($service) ? 'Edit' : 'Add'); ?> Service</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
<!-- <p>Form action: <?php echo e(route('feature.store')); ?></p> -->
   <form action="<?php echo e(route('enquiry.update', $enquiry->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label>Status:</label>
            <select name="status" class="form-control" required>
                <option value="pending" <?php echo e($enquiry->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                <option value="resolved" <?php echo e($enquiry->status == 'resolved' ? 'selected' : ''); ?>>Resolved</option>
                <option value="closed" <?php echo e($enquiry->status == 'closed' ? 'selected' : ''); ?>>Closed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?php echo e(route('enquiry.index')); ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
    </div>
</div>

<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/update_status_enquiries.blade.php ENDPATH**/ ?>