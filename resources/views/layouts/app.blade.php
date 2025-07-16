<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SkillsFull Solutions')</title>

    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/bootstrap.min.css') }}">
    <!-- Add more CSS as needed -->

    @stack('styles') <!-- For page-specific CSS -->
</head>
<body>

    @include('layouts.header') <!-- Load Header -->

    <main>
        @yield('content') <!-- Page Content -->
    </main>

    @include('layouts.footer') <!-- Load Footer -->

    <!-- Global JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
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
    @stack('scripts') <!-- For page-specific JS -->
</body>
</html>
