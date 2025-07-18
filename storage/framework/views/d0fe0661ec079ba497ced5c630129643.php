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
            <h5 class="mb-0"><?php echo e(isset($training) ? 'Update' : 'Add New'); ?> Topics</h5>
        </div>

        <div class="card-body">
           <form action="<?php echo e(isset($topic) ? route('topics.update', $topic->id) : route('topics.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($topic)): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

        <div class="form-group">
            <label for="training_id">Select Training</label>
            <select name="training_id" class="form-control" required>
                <option value="">Select</option>
                <?php $__currentLoopData = $trainings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $training): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($training->id); ?>" <?php echo e(old('training_id', $topic->training_id ?? '') == $training->id ? 'selected' : ''); ?>>
                        <?php echo e($training->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label>Topic Name</label>
            <input type="text" name="topic_name" class="form-control" value="<?php echo e(old('topic_name', $topic->topic_name ?? '')); ?>" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="topic_description" class="form-control"><?php echo e(old('topic_description', $topic->topic_description ?? '')); ?></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="1" <?php echo e(old('status', $topic->status ?? 1) == 1 ? 'selected' : ''); ?>>Active</option>
                <option value="0" <?php echo e(old('status', $topic->status ?? 1) == 0 ? 'selected' : ''); ?>>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success"><?php echo e(isset($topic) ? 'Update' : 'Save'); ?></button>
    </form>
        </div>
    </div>
</div>


</div>
    </div>
</div>

<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/topics_add.blade.php ENDPATH**/ ?>