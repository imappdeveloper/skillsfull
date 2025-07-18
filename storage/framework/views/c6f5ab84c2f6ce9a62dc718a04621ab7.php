<?php use Illuminate\Support\Str; ?>



<?php $__env->startSection('title','Course'); ?>


<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Course</h2>
 <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    <?php endif; ?>

     <a href="<?php echo e(route('training.create')); ?>" class="btn btn-primary no-hover" style="color: white">Add New Course</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                  <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Type</th>
        <th>Fees</th>
        <th>Duration</th>
        <th>Start Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
                      </thead>
                       <tbody>
                        <?php if($trainings ->isEmpty()): ?>
    <tr><td colspan="5">No Service found.</td></tr>
<?php else: ?>
                        <?php $__currentLoopData = $trainings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $training): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td>
            <?php if($training->image): ?>
                <img src="<?php echo e(asset('storage/' . $training->image)); ?>" width="80">
            <?php endif; ?>
        </td>
        <td><?php echo e($training->name); ?></td>
        <td><?php echo e($training->type); ?></td>
        <td><?php echo e($training->fees); ?></td>
        <td><?php echo e($training->duration); ?></td>
        <td><?php echo e($training->start_date); ?></td>
        <td><?php echo e($training->status ? 'Active' : 'Inactive'); ?></td>
        <td>
            <a class="btn btn-sm btn-warning" href="<?php echo e(route('training.edit', $training->id)); ?>">Edit</a>
            <form  action="<?php echo e(route('training.destroy', $training->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
            </form>
        </td>
    </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-center">
    <?php echo $trainings->links('pagination::bootstrap-4'); ?>

</div>
              </div>
            </div>
          </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/training.blade.php ENDPATH**/ ?>