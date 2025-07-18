<?php use Illuminate\Support\Str; ?>



<?php $__env->startSection('title','Protfolio'); ?>


<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Portfolios</h2>
 <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    <?php endif; ?>

     <a href="<?php echo e(route('portfolio.create')); ?>" class="btn btn-primary no-hover" style="color: white">Add New Protfolio</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Type</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
                      </thead>
                       <tbody>
                        <?php if($portfolios->isEmpty()): ?>
    <tr><td colspan="5">No Service found.</td></tr>
<?php else: ?>
                        <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><img src="<?php echo e(asset('storage/' . $portfolio->image)); ?>" width="80"></td>
        <td><?php echo e($portfolio->name); ?></td>
        <td><?php echo e($portfolio->type); ?></td>
        <td><?php echo e($portfolio->status ? 'Active' : 'Inactive'); ?></td>
        <td>
            <a  class="btn btn-sm btn-warning" href="<?php echo e(route('portfolio.edit', $portfolio->id)); ?>">Edit</a>
            <form action="<?php echo e(route('portfolio.destroy', $portfolio->id)); ?>" method="POST" style="display:inline;">
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
              </div>
            </div>
          </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/portfolio.blade.php ENDPATH**/ ?>