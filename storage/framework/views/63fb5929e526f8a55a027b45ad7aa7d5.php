<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'SkillsFull Solutions'); ?></title>

    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lib/bootstrap/bootstrap.min.css')); ?>">
    <!-- Add more CSS as needed -->

    <?php echo $__env->yieldPushContent('styles'); ?> <!-- For page-specific CSS -->
</head>
<body>

    <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <!-- Load Header -->

    <main>
        <?php echo $__env->yieldContent('content'); ?> <!-- Page Content -->
    </main>

    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <!-- Load Footer -->

    <!-- Global JS -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
    <!-- Add more JS as needed -->
<!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
    <?php echo $__env->yieldPushContent('scripts'); ?> <!-- For page-specific JS -->
</body>
</html>
<?php /**PATH F:\SkillsFull\Skillsfull\resources\views/layouts/app.blade.php ENDPATH**/ ?>