<?php $__env->startSection('title','Setting'); ?>


<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
 
    <?php if(session('success')): ?>

        <div class="alert alert-success alert-dismissible" role="alert">
            <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    <?php endif; ?>
            <form action="<?php echo e(route('website.save')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">🌐 Website Settings</h5>
                    </div>

                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="website_name" class="form-label">Website Name</label>
                                <input type="text" class="form-control" id="website_name" name="website_name" value="<?php echo e(old('website_name', $website->website_name ?? '')); ?>" required>
                            </div>

                            <div class="col-md-6">
                                <label for="website_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="website_number" name="website_number" value="<?php echo e(old('website_number', $website->website_number ?? '')); ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="website_email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="website_email" name="website_email" value="<?php echo e(old('website_email', $website->website_email ?? '')); ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="website_fb" class="form-label">Facebook Link</label>
                                <input type="text" class="form-control" id="website_fb" name="website_fb" value="<?php echo e(old('website_fb', $website->website_fb ?? '')); ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="website_insta" class="form-label">Instagram Link</label>
                                <input type="text" class="form-control" id="website_insta" name="website_insta" value="<?php echo e(old('website_insta', $website->website_insta ?? '')); ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="website_in" class="form-label">LinkedIn Link</label>
                                <input type="text" class="form-control" id="website_in" name="website_in" value="<?php echo e(old('website_in', $website->website_in ?? '')); ?>">
                            </div>

                            <div class="col-12">
                                <label for="website_address" class="form-label">Website Address</label>
                                <textarea class="form-control" id="website_address" name="website_address" rows="2"><?php echo e(old('website_address', $website->website_address ?? '')); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label for="footer_about" class="form-label">Footer About</label>
                                <textarea class="form-control" id="footer_about" name="footer_about" rows="3"><?php echo e(old('footer_about', $website->footer_about ?? '')); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success px-4">💾 Save Settings</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/setting.blade.php ENDPATH**/ ?>