<?php $__env->startSection('title','Teams'); ?>


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
            <h5 class="mb-0"><?php echo e(isset($team) ? 'Update' : 'Add New'); ?> Team Member</h5>
        </div>

        <div class="card-body">
            <form action="<?php echo e(isset($team) ? route('teams.update', $team->id) : route('teams.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if(isset($team)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>

                <div class="row">
                    <!-- Name -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name_employee" class="form-control" required
                               value="<?php echo e($team->name_employee ?? old('name_employee')); ?>" placeholder="Enter employee name">
                    </div>

                    <!-- Designation -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Designation</label>
                        <input type="text" name="designation_employee" class="form-control" required
                               value="<?php echo e($team->designation_employee ?? old('designation_employee')); ?>" placeholder="e.g., Developer">
                    </div>
                </div>

                <div class="row">
                    <!-- Facebook -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Facebook Link</label>
                        <input type="url" name="fb_link" class="form-control"
                               value="<?php echo e($team->fb_link ?? old('fb_link')); ?>" placeholder="https://facebook.com/username">
                    </div>

                    <!-- Instagram -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Instagram Link</label>
                        <input type="url" name="insta_link" class="form-control"
                               value="<?php echo e($team->insta_link ?? old('insta_link')); ?>" placeholder="https://instagram.com/username">
                    </div>
                </div>

                <div class="row">
                    <!-- LinkedIn -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">LinkedIn Link</label>
                        <input type="url" name="linked_link" class="form-control"
                               value="<?php echo e($team->linked_link ?? old('linked_link')); ?>" placeholder="https://linkedin.com/in/username">
                    </div>

                    <!-- Image -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        <?php if(isset($team) && $team->image): ?>
                            <div class="mt-2">
                                <img src="<?php echo e(asset('storage/' . $team->image)); ?>" class="rounded border" width="100" height="auto" alt="Team Image">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <button class="btn btn-<?php echo e(isset($team) ? 'primary' : 'success'); ?>" type="submit">
                        <?php echo e(isset($team) ? 'Update' : 'Add'); ?> Team Member
                    </button>
                    <a href="<?php echo e(route('teams.index')); ?>" class="btn btn-outline-secondary">Back to List</a>
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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/teams_add.blade.php ENDPATH**/ ?>