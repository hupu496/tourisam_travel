<style type="text/css">
    input[type="file"] {
    display: none;
}

.custom-file-upload {
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    color: #ffffff;
    background-color: #007bff;
    border-radius: 5px;
    font-weight: bold;
}
</style>
<div class="container-fluid attractions py-5">
            <div class="container attractions-section py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                   
                    <h1 class="display-5 text-white mb-4">Udaan Marketing Service</h1>
                    <p class="text-white mb-0">A Household Marketing Service,Event Management,Touriest Guide,Software Service, legal Advisor,live puja & Darshan and other Services.
                    </p>
                </div>
               
                 
                  <div class="col-xl-8 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                     <div class="ticket-form p-5" style="
    background: #9b9090;
    opacity: 0.8;
    border-radius: 25px;
">
                                    <h2 class="text-dark text-uppercase mb-4">Login</h2>
                                        <form action="<?php echo base_url('homeservice/loginuser'); ?>" method="post">
                                        <div class="row g-4">
                                            <div class="col-12 col-xl-12">
                                                <input type="email" class="form-control border-0 py-2" name="email" id="name" placeholder="Enter Your email :" required="">
                                            </div>
                                            <div class="col-12 col-xl-12">
                                                <input type="password" class="form-control border-0 py-2" name="password" id="name" placeholder="Enter Your Password :" required="">
                                            </div>
                                           
<div class="col-12">
    <button type="submit" name="user_login"  class="btn btn-primary w-100 py-2 px-5">Submit</button>
</div>
                                        </div>
                                    </form>
                                </div>
                            </div>
              
                
                <!-- <div class="owl-carousel attractions-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?php echo base_url('assets/img/attraction-1.jpg'); ?>" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Roller Coaster</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?php echo base_url('assets/img/attraction-2.jpg'); ?>" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Carousel</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.6s">
                        <img src="<?php echo base_url('assets/img/attraction-3.jpg'); ?>" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Arcade Game</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.8s">
                        <img src="<?php echo base_url('assets/img/attraction-4.jpg'); ?>" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Hanging Carousel</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="1s">
                        <img src="<?php echo base_url('assets/img/attraction-2.jpg'); ?>" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Carousel</a>
                    </div>
                </div> -->
            </div>
        </div>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <?php if(isset($this->session->web_msg)){ ?>
        <script type="text/javascript">
           swal("Good job!", "You clicked the button!", "success");
           swal('Good job!','<?php echo $this->session->web_msg;?>','success');
        </script>
           <?php }else if(isset($this->session->web_err_msg)){ ?>
        <script type="text/javascript">
           // swal("Good job!", "You clicked the button!", "success");
           swal('Opps!','<?php echo $this->session->web_err_msg;?>','error');
        </script>
    <?php }?>

       