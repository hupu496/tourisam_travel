<div class="container-fluid service py-5">
            <div class="container service-section py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Service</h4>
                    <h1 class="display-5 text-white mb-4">Explore Waterland Park service</h1>
                    <p class="mb-0 text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                    <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-days p-4">
                            <div class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Monday - Friday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>11:00 AM - 16:00 PM</p></div>
                            <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Saturday - Sunday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 17:00 PM</p></div>
                            
                        </div>
                    </div>
                    <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-home fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Private Gazebo</a>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-utensils fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Delicious Food</a>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-door-closed fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Safety Lockers</a>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-swimming-pool fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">River Rides</a>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <?php if(!empty($service)){
                        foreach ($service as $key => $value) { ?>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item">
                            <img src="<?php echo base_url($value['image']); ?>" class="img-fluid rounded w-100" alt="Image" width="100" height="100">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white"><?php echo $value['name']; ?></h4>
                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,
                                    </p>
                                    <form action="<?php echo base_url('service_form');?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                        <button type="submit" class="btn btn-primary rounded-pill py-2 px-4">Read More<i class="fa fa-arrow-right ms-1"></i></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                         



              <?php          }
                    } ?>
                   
                   
                    
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonials</h4>
                    <h1 class="display-5 text-white mb-4">Our Clients Riviews</h1>
                    <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                   <?php if(!empty($customer_review)){
                        foreach ($customer_review as $key => $value) {  ?>
                          <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4"><?php echo $value['review']; ?>
                        </p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="<?php echo base_url($value['photo']); ?>" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4><?php echo $value['firstname'].' '.$value['lastname']; ?></h4>
                                <p class="text-start text-white"><?php echo $value['service']; ?>(<?php echo $value['sub_service']; ?>)</p>
                                <div class="d-flex text-primary">
                                    <?php for ($i=0; $i < $value['rating']; $i++) {   ?>
                                      <i class="fas fa-star"></i>
                               <?php     }   ?>
                                    
                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php   }
                    }  ?>
                    
                </div>
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

       