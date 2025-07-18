
<?php $__env->startSection('title', 'Team'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Team</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Team</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Team</h4>
                    <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>
                    <!--<p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.-->
                    </p>
                </div>
                <div class="row g-4">
                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.<?php echo e($team->id); ?>s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo e(asset('storage/' . $team->image)); ?>" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href="<?php echo e($team->fb_link); ?>"><i class="fab fa-facebook-f"></i></a>
                                
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href="<?php echo e($team->linked_link); ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href="<?php echo e($team->insta_link); ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0"><?php echo e($team->name_employee); ?></h4>
                                <p class="mb-0"><?php echo e($team->designation_employee); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </div>
            </div>
        </div>
        <!-- Team End -->
         <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/team.blade.php ENDPATH**/ ?>