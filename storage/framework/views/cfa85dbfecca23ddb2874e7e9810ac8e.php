<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'SkillsFull Solutions'); ?></title>

    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <!-- jQuery -->





    <!-- <link rel="stylesheet" href="<?php echo e(asset('lib/bootstrap/bootstrap.min.css')); ?>"> -->
    <!-- Add more CSS as needed -->

    <?php echo $__env->yieldPushContent('styles'); ?> <!-- For page-specific CSS -->
    <style>
        .no-hover:hover {
    background-color: chartreuse;
    color: inherit !important;
    border-color: inherit !important;
    /* cursor: default !important; */
    box-shadow: none !important;
}
        </style>
</head>
<body>

    <?php echo $__env->make('admin.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <!-- Load Header -->

    <main>
        <?php echo $__env->yieldContent('content'); ?> <!-- Page Content -->
    </main>

    <?php echo $__env->make('admin.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <!-- Load Footer -->



<script>
  tinymce.init({
    selector: 'textarea#feature_description',
    height: 300,
    plugins: 'lists link image preview',
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image | preview',
    menubar: false
  });
</script>

    <script>
function logout() {
    fetch("<?php echo e(route('logout')); ?>", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>",
            "Accept": "application/json",
            "Content-Type": "application/json"
        }
    }).then(response => {
        if (response.ok) {
            window.location.href = "<?php echo e(route('admin.login')); ?>";
        }
    });
}
</script>
</body>
</html>
<?php /**PATH F:\SkillsFull\Skillsfull\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>