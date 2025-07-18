<?php $__env->startSection('title', 'Training'); ?>

<?php $__env->startSection('content'); ?>
<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Training</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary"><?php echo e($trainnigdata->name); ?></li>
                </ol>
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <br>
        <div class="container-fluid bg-light about pb-5">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-content bg-white rounded p-5 h-100">
                            
                            <h3 class="display-7 mb-4"><?php echo e($trainnigdata->name); ?></h3>
                            <p><?php echo e($trainnigdata->description ?? ' '); ?>

                            </p>
                            
                            <div class="h-100">
                            <div class="mb-5">
                                <h6 class="text-primary"> What You'll Teach in <?php echo e($trainnigdata->name); ?> Training:</h6>

                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion" id="accordionExample">
    <?php $__empty_1 = true; $__currentLoopData = $trainnigdata->topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo e($topic->id); ?>">
                <button class="accordion-button <?php echo e($index !== 0 ? 'collapsed' : ''); ?>"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse<?php echo e($topic->id); ?>"
                        aria-expanded="<?php echo e($index === 0 ? 'true' : 'false'); ?>"
                        aria-controls="collapse<?php echo e($topic->id); ?>">
                    <?php echo e($topic->topic_name); ?>

                </button>
            </h2>
            <div id="collapse<?php echo e($topic->id); ?>"
                 class="accordion-collapse collapse <?php echo e($index === 0 ? 'show' : ''); ?>"
                 aria-labelledby="heading<?php echo e($topic->id); ?>"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php echo e($topic->topic_description); ?>

                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No topics available.</p>
    <?php endif; ?>
</div>



                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-5 h-100">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
                                    <div class="rounded bg-light">
                                        <img src="<?php echo e(asset('storage/' . $trainnigdata->image)); ?>" class="img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
<div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <h4 class="mb-0 text-dark">Month </h4>
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up"><?php echo e($trainnigdata->duration); ?></span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <h4 class="mb-0 text-dark">Start Date</h4>
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold"><?php echo e($trainnigdata->start_date); ?></span>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <h4 class="mb-0 text-dark">Hours</h4>
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" ><?php echo e($trainnigdata->hours); ?></span>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <h4 class="mb-0 text-dark">Fees</h4>
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up"><?php echo e($trainnigdata->fees); ?></span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\SkillsFull\Skillsfull\resources\views/training.blade.php ENDPATH**/ ?>