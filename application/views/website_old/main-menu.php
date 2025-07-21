<style type="text/css">
    .sticky-top .navbar-light .navbar-brand img {
    max-height: 120px;
}
h5 {
  color: white;
  text-shadow: 2px 2px 4px #3f48cc;
}
.text-dark{
    color: #2f3ffd !important;
}
/* Hide the text on mobile (screen width less than 768px) */
@media (max-width: 767.98px) {
    .logo-text {
        display: none;
    }
}

/* Show the text on desktop (screen width 768px and above) */
@media (min-width: 768px) {
    .logo-text {
        display: block;
    }
}

</style>
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="" class="navbar-brand p-0">
                    <h5 class="w3-monospace text-dark"><img src="<?php echo base_url('assets/images/2.png'); ?>" alt="Logo">Udaan Marketing Services</h5>
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="<?php echo base_url('/') ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo base_url('about'); ?>" class="nav-item nav-link">About</a>
                        <a href="<?php echo base_url('service'); ?>" class="nav-item nav-link">Service</a>
                        <a href="<?php echo base_url('franchise'); ?>" class="nav-item nav-link">Franchise</a>
                        <a href="<?php echo base_url('contact') ?>" class="nav-item nav-link">Contact</a>

                    </div>
                    <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                       
                    </div>
                    <?php 
                    $this->load->helper('cookie');
              $login_record = get_cookie('login_cookie');

                    if(!empty($login_record)){  ?>
                         <a href="<?php echo base_url('order_status') ?>" class="nav-item nav-link rounded-circle" style="font-size: 30px;"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                          <a href="<?php echo base_url('logout'); ?>" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Sign Out</a>

                 <?php   } else{  ?>
                     <a href="<?php echo base_url('login'); ?>" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Login</a>
                <?php    }   ?>
                   
                    
                </div>
            </nav>
        </div>