<?php use Illuminate\Support\Str; ?>



<?php $__env->startSection('title','Service'); ?>


<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Servieses</h2>
 <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    <?php endif; ?>

     <a href="<?php echo e(route('service.create')); ?>" class="btn btn-primary no-hover" style="color: white">Add New Service</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
           <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th width="150">Actions</th>
        </tr>
                      </thead>
                       <tbody>
                        <?php if($services->isEmpty()): ?>
    <tr><td colspan="5">No Service found.</td></tr>
<?php else: ?>
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
           <td>
                        <?php if($service->service_image): ?>
                            <img src="<?php echo e(asset('storage/' . $service->service_image)); ?>" width="60">
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($service->service_name); ?></td>
                    <td><?php echo e(Str::limit(strip_tags($service->service_description), 10)); ?></td>

                    <td><?php echo e($service->status ? 'Active' : 'Inactive'); ?></td>
                    <td>
                        <a href="<?php echo e(route('service.edit', $service->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form method="POST" action="<?php echo e(route('service.delete', $service->id)); ?>" style="display:inline;">
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
              </div>
            </div>
          </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/service.blade.php ENDPATH**/ ?>