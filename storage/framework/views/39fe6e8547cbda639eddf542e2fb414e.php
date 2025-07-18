<?php use Illuminate\Support\Str; ?>



<?php $__env->startSection('title','Topics'); ?>


<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Topics</h2>
 <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    <?php endif; ?>

     <a href="<?php echo e(route('topics.create')); ?>" class="btn btn-primary no-hover" style="color: white">Add Topic</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                 <tr>
                <th>Training</th>
                <th>Topic Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
                      </thead>
                       <tbody>
                        <?php if($topics ->isEmpty()): ?>
    <tr><td colspan="5">No Service found.</td></tr>
<?php else: ?>
                        <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <td><?php echo e($topic->training->name ?? 'N/A'); ?></td>
                <td><?php echo e($topic->topic_name); ?></td>
                <td><?php echo e(Str::limit($topic->topic_description, 50)); ?></td>
                <td><?php echo e($topic->status ? 'Active' : 'Inactive'); ?></td>
                <td>
                    <a href="<?php echo e(route('topics.edit', $topic->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('topics.destroy', $topic->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-center">
    <?php echo $topics->links('pagination::bootstrap-4'); ?>

</div>
              </div>
            </div>
          </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/topics.blade.php ENDPATH**/ ?>