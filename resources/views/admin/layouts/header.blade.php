<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('aimg/logo/logo.png') }}" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('acss/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          {{-- <img src="{{ asset('aimg/logo/logo2.png') }}"> --}}
        </div>
        <div class="sidebar-brand-text mx-3">SkillsFull Solution</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('admin/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">

        Features
      </div>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/feature')}}">
          <i class="fas fa-fw fa fa-code"></i>
          <span>Feature</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/service')}}">
          <i class="fas fa-fw fa fa-wrench"></i>
          <span>Service</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/teams')}}">
          <i class="fas fa-fw fa fa-users"></i>
          <span>Team</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/portfolio')}}">
          <i class="fas fa-fw fa fa-briefcase"></i>
          <span>Protfolio</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/training')}}">
          <i class="fas fa-fw fas fa-chalkboard"></i>
          <span>Training</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/enquiries')}}">
          <i class="fas fa-fw fa fa-question-circle"></i>
          <span>Enquiries</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
          aria-expanded="true" aria-controls="collapseBootstrap1">
          <i class="far fa-fw fa fa-cog"></i>
          <span>Settings</span>
        </a>
        <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Settings</h6>
            <a class="collapse-item" href="{{ url('admin/setting')}}">Genral Settings</a>
            <a class="collapse-item" href="buttons.html">Email Settings</a>

          </div>
        </div>
      </li>






      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{asset('aimg/boy.png')}}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">


                <a onclick="logout()" class="dropdown-item" href="javascript:void(0);" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>



        <!-- Topbar -->
