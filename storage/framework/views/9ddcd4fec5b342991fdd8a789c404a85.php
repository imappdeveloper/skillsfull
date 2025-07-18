<?php $__env->startSection('title','Course'); ?>


<?php $__env->startSection('content'); ?>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
<!-- <p>Form action: <?php echo e(route('feature.store')); ?></p> -->
   <div class="container mt-4">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><?php echo e(isset($training) ? 'Update' : 'Add New'); ?> Training Program</h5>
        </div>

        <div class="card-body">
            <form action="<?php echo e(isset($training) ? route('training.update', $training->id) : route('training.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if(isset($training)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>

                <div class="row g-3">
                    <!-- Name -->
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $training->name ?? '')); ?>" required>
                    </div>

                    <!-- Type -->
                    <div class="col-md-6">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" value="<?php echo e(old('type', $training->type ?? '')); ?>">
                    </div>

                    <!-- Fees -->
                    <div class="col-md-6">
                        <label class="form-label">Fees</label>
                        <input type="number" name="fees" class="form-control" value="<?php echo e(old('fees', $training->fees ?? '')); ?>">
                    </div>

                    <!-- Duration -->
                    <div class="col-md-6">
                        <label class="form-label">Duration</label>
                        <input type="text" name="duration" class="form-control" value="<?php echo e(old('duration', $training->duration ?? '')); ?>">
                    </div>

                    <!-- Start Date -->
                    <div class="col-md-6">
                        <label class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control" value="<?php echo e(old('start_date', $training->start_date ?? '')); ?>">
                    </div>

                    <!-- Hours -->
                    <div class="col-md-6">
                        <label class="form-label">Hours</label>
                        <input type="text" name="hours" class="form-control" value="<?php echo e(old('hours', $training->hours ?? '')); ?>">
                    </div>

                    <!-- Description -->
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" placeholder="Write a brief description..."><?php echo e(old('description', $training->description ?? '')); ?></textarea>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" <?php echo e(old('status', $training->status ?? '') == 1 ? 'selected' : ''); ?>>Active</option>
                            <option value="0" <?php echo e(old('status', $training->status ?? '') == 0 ? 'selected' : ''); ?>>Inactive</option>
                        </select>
                    </div>

                    <!-- Image -->
                    <div class="col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                        <?php if(isset($training) && $training->image): ?>
                            <div class="mt-2">
                                <img src="<?php echo e(asset('storage/' . $training->image)); ?>" width="100" class="img-thumbnail" alt="Training Image">
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 text-end mt-3">
                        <button type="submit" class="btn btn-<?php echo e(isset($training) ? 'primary' : 'success'); ?>">
                            <?php echo e(isset($training) ? 'Update Training' : 'Add Training'); ?>

                        </button>
                        <a href="<?php echo e(route('training.index')); ?>" class="btn btn-outline-secondary ms-2">Back to List</a>
                    </div>
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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/training_add.blade.php ENDPATH**/ ?>