<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SkillsFull Solutions')</title>

    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- jQuery -->





    <!-- <link rel="stylesheet" href="{{ asset('lib/bootstrap/bootstrap.min.css') }}"> -->
    <!-- Add more CSS as needed -->

    @stack('styles') <!-- For page-specific CSS -->
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

    @include('admin.layouts.header') <!-- Load Header -->

    <main>
        @yield('content') <!-- Page Content -->
    </main>

    @include('admin.layouts.footer') <!-- Load Footer -->



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
    fetch("{{ route('logout') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json",
            "Content-Type": "application/json"
        }
    }).then(response => {
        if (response.ok) {
            window.location.href = "{{ route('admin.login') }}";
        }
    });
}
</script>
</body>
</html>
