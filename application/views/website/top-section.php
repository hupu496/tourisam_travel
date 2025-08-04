<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travela - Tourism Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css');?>" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
</head>
<style>
     @media screen and (max-width: 768px) {
    .hide-on-small {
      display: none;
    }
  }
</style>
<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#" class="me-3 text-light" data-bs-toggle="modal" data-bs-target="#authModal" id="showRegister">
                    <i class="fa fa-user me-2"></i>Register
                    </a>
                    <a href="#" class="me-3 text-light" data-bs-toggle="modal" data-bs-target="#authModal" id="showLogin">
                    <i class="fa fa-sign-in-alt me-2"></i>Login
                    </a>
                    <div class="dropdown">
                          <?php 
                    $this->load->helper('cookie');
              $login_record = get_cookie('login_cookie');

                    if(!empty($login_record)){  ?>
                    <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i
                                    class="fa fa-home me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="<?php echo base_url('order_status') ?>" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> Order</a>
                            <a href="<?php echo base_url('logout'); ?>" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                 <?php   }   ?>     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
               <h3 class="m-0">
                <img src="<?php echo base_url('assets/img/Website_Logo.jpg'); ?>" alt="Logo" class="logo-img me-2"
                    style="border-radius: 100%; width:65px; height: 100px;">
                <span class="hide-on-small">HOLYLAND PILGRIMAGE TOURS</span>
                </h3>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?php echo base_url('/');?>" class="nav-item nav-link active">Home</a>
                    <a href="<?php echo base_url('about'); ?>" class="nav-item nav-link">About us</a>
                    <a href="ourvision.html" class="nav-item nav-link">Our vision</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tours</a>
                        <div class="dropdown-menu m-0">
                            <a href="upcomingtour.html" class="dropdown-item">Upcomin Tours</a>
                            <a href="packages.html" class="dropdown-item">Our Tour Packages</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
            </div>
        </nav>
<!-- model -->
<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="modalTitle" class="modal-title">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <!-- Login Form -->
        <form id="loginForm" method="POST" action="<?php echo base_url('homeservice/registeruser'); ?>">
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="name" class="form-control" placeholder="Enter email">
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <!-- Register Form -->
        <form id="registerForm" method="POST" action="<?php echo base_url('homeservice/registeruser'); ?>" enctype="multipart/form-data" style="display: none;">
          <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">
          </div>
          <div class="mb-3">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter phone">
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-success w-100">Create Account</button>
        </form>
      </div>
      <div class="modal-footer">
        <small>
          <a href="#" id="toggleToRegister">Don't have an account? Register</a>
          <a href="#" id="toggleToLogin" style="display:none;">Already have an account? Login</a>
        </small>
      </div>
    </div>
  </div>
</div>
<script>
     document.getElementById('showRegister').addEventListener('click', function () {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerForm').style.display = 'block';
    document.getElementById('toggleToRegister').style.display = 'none';
    document.getElementById('toggleToLogin').style.display = 'inline';
    document.getElementById('modalTitle').innerText = 'Register';
  });

  document.getElementById('showLogin').addEventListener('click', function () {
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('toggleToRegister').style.display = 'inline';
    document.getElementById('toggleToLogin').style.display = 'none';
    document.getElementById('modalTitle').innerText = 'Login';
  });

  document.getElementById('toggleToRegister').addEventListener('click', function () {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerForm').style.display = 'block';
    document.getElementById('toggleToRegister').style.display = 'none';
    document.getElementById('toggleToLogin').style.display = 'inline';
    document.getElementById('modalTitle').innerText = 'Register';
  });

  document.getElementById('toggleToLogin').addEventListener('click', function () {
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('toggleToRegister').style.display = 'inline';
    document.getElementById('toggleToLogin').style.display = 'none';
    document.getElementById('modalTitle').innerText = 'Login';
  });
</script>
<script>
  // Wait for the DOM to fully load
  window.addEventListener('load', function () {
    var authModal = new bootstrap.Modal(document.getElementById('authModal'));
    authModal.show();

    // Default to Login form
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('toggleToRegister').style.display = 'inline';
    document.getElementById('toggleToLogin').style.display = 'none';
    document.getElementById('modalTitle').innerText = 'Login';
  });
</script>
