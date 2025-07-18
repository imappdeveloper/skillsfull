<?php $__env->startSection('title','Features'); ?>


<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Features</h2>
 <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    <?php endif; ?>

    <a href="<?php echo e(route('feature.create')); ?>" class="btn btn-primary no-hover" style="color: white">Add New Feature</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
            <th>ID</th>
            <th>Heading</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
                      </thead>
                       <tbody>
                        <?php if($features->isEmpty()): ?>
    <tr><td colspan="5">No features found.</td></tr>
<?php else: ?>
                        <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($feature->id); ?></td>
            <td><?php echo e($feature->feature_heading); ?></td>
            <td><?php echo e($feature->feature_description); ?></td>
            <td><?php echo e($feature->status ? 'Active' : 'Inactive'); ?></td>
            <td>
                <a href="<?php echo e(route('feature.edit', $feature->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                <form action="<?php echo e(route('feature.delete', $feature->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                    <button onclick="return confirm('Delete this feature?')" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/feature.blade.php ENDPATH**/ ?>