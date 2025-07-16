<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('aimg/logo/logo.png') }}" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('acss/ruang-admin.min.css') }}" rel="stylesheet">

</head>

<body style="background-color: white;" class="bg-gradient-login">
 
<div class="container d-flex justify-content-center align-items-center min-vh-100 bg-light">
  <div class="card shadow-sm border-0 w-50" style="max-width: 400px; border-radius: 1rem;">
    <div class="card-body p-4">
      <div class="text-center mb-4">
        <h1 class="h4 text-primary">Login</h1>
         @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
      </div>
      <form method="POST" action="{{ route('admin.login') }}">
      @csrf  
      <div class="form-group mb-3">
          <input type="email" class="form-control rounded-pill" name="email" value="{{ old('email') }}" required placeholder="Enter Email Address">
        </div>
        <div class="form-group mb-3">
          <input type="password" class="form-control rounded-pill" name="password" required placeholder="Password">
        </div>
        <div class="form-group form-check d-flex align-items-center">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label class="form-check-label ms-2" for="rememberMe">Remember Me</label>
        </div>
        <!-- <a href="{{url('/admin/dashboard')}}" >Login</a> -->
        <button class="btn btn-primary btn-block rounded-pill" type="submit">Login</button>
      </form>
      <hr class="my-4">
      <div class="text-center">
        <a href="#" class="small text-decoration-none">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>


  <!-- Login Content -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('ajs/ruang-admin.min.js') }}"></script>
</body>

</html>