<?php $__env->startSection('title','Portfolio'); ?>


<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
<!-- <p>Form action: <?php echo e(route('feature.store')); ?></p> -->
  <div class="container mt-4">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><?php echo e(isset($portfolio) ? 'Update' : 'Add New'); ?> Portfolio</h5>
        </div>

        <div class="card-body">
            <form action="<?php echo e(isset($portfolio) ? route('portfolio.update', $portfolio->id) : route('portfolio.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if(isset($portfolio)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>

                <div class="row">
                    <!-- Type -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control"
                               value="<?php echo e(old('type', $portfolio->type ?? '')); ?>" placeholder="e.g., Web Design">
                    </div>

                    <!-- Name -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control"
                               value="<?php echo e(old('name', $portfolio->name ?? '')); ?>" placeholder="Project name">
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="4" placeholder="Short description..."><?php echo e(old('description', $portfolio->description ?? '')); ?></textarea>
                </div>

                <div class="row">
                    <!-- Image -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        <?php if(isset($portfolio) && $portfolio->image): ?>
                            <div class="mt-2">
                                <img src="<?php echo e(asset('storage/' . $portfolio->image)); ?>" class="rounded border" width="100" alt="Portfolio Image">
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Status -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="1" <?php echo e((old('status', $portfolio->status ?? '') == 1) ? 'selected' : ''); ?>>Active</option>
                            <option value="0" <?php echo e((old('status', $portfolio->status ?? '') == 0) ? 'selected' : ''); ?>>Inactive</option>
                        </select>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <button class="btn btn-<?php echo e(isset($portfolio) ? 'primary' : 'success'); ?>" type="submit">
                        <?php echo e(isset($portfolio) ? 'Update Portfolio' : 'Add Portfolio'); ?>

                    </button>
                    <a href="<?php echo e(route('portfolio.index')); ?>" class="btn btn-outline-secondary">Back to List</a>
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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/portfolio_add.blade.php ENDPATH**/ ?>