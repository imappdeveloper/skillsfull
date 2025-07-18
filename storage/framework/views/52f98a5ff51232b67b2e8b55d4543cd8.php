<?php use Illuminate\Support\Str; ?>



<?php $__env->startSection('title','Enquiries'); ?>


<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Enquiries</h2>
 <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    <?php endif; ?>

     
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Contact</th>
                <th>Type</th><th>Subject</th><th>Status</th><th>Action</th>
            </tr>
                      </thead>
                       <tbody>
                        <?php if($enquiries ->isEmpty()): ?>
    <tr><td colspan="5">No Service found.</td></tr>
<?php else: ?>
                        <?php $__currentLoopData = $enquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <td><?php echo e($enquiry->id); ?></td>
                <td><?php echo e($enquiry->name); ?></td>
                <td><?php echo e($enquiry->email); ?></td>
                <td><?php echo e($enquiry->contact); ?></td>
                <td><?php echo e($enquiry->type); ?></td>
                <td><?php echo e($enquiry->subject); ?></td>
                <td><?php echo e($enquiry->status); ?></td>
                <td>
                    <a href="<?php echo e(route('enquiry.edit', $enquiry->id)); ?>" class="btn btn-primary btn-sm">Update Status</a>
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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/enquiries.blade.php ENDPATH**/ ?>