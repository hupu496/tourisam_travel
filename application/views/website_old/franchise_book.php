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
<div class="container-fluid attractions py-5" style="margin-top: 100px;">
            <div class="container attractions-section py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                   
                    <h1 class="display-5 text-white mb-4">Udaan Marketing Service</h1>
                    <p class="text-white mb-0">A Household Marketing Service,Event Management,Touriest Guide,Software Service, legal Advisor,live puja & Darshan and other Services.
                    </p>
                </div>
               
                 
                  <div class="col-xl-10 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                     <div class="ticket-form p-5" style="
    background: #9b9090;
    opacity: 0.8;
    border-radius: 25px;
">
                                    <h2 class="text-dark text-uppercase mb-4">Get Register Franchise</h2>
                                   <form action="<?php echo base_url('homeservice/franchise_orderbook/');?>" method="post" enctype="multipart/form-data">
                                        <div class="row g-4">
                                            <div class="col-12 col-xl-4">
                                                <input type="text" class="form-control border-0 py-2" name="firstname" id="name" placeholder="First Name">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <input type="text" class="form-control border-0 py-2" name="lastname" id="name" placeholder="Last Name">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <input type="email" class="form-control border-0 py-2" name="email" id="email" placeholder="Your Email">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <input type="email" class="form-control border-0 py-2" name="password" id="email" placeholder="Your Password">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <input type="phone" class="form-control border-0 py-2" name="phone" id="phone" placeholder="Phone">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <input type="text" class="form-control border-0 py-2" name="address" id="phone" placeholder="Address">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <input type="text" class="form-control border-0 py-2" name="business_name" id="phone" placeholder="Business Name">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <input type="text" class="form-control border-0 py-2" name="businessaddress" id="phone" placeholder="Business Address">
                                            </div>
                                             <div class="col-12 col-xl-4">
                                                <input type="text" class="form-control border-0 py-2" name="gst" id="phone" placeholder="GST NO">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <input type="text" class="form-control border-0 py-2" name="upi_id" id="phone" placeholder="UPI ID">
                                            </div>
                                            
                                            
                                              <div class="col-12 col-xl-4">
    <label for="aadhar_card" class="custom-file-upload">
        Upload Aadhaar
    </label>
    <input type="file" class="form-control border-0 py-2" name="aadhaar" id="aadhar_card">
</div>
<div class="col-12 col-xl-4">
    <label for="photo" class="custom-file-upload">
        Upload Photo
    </label>
    <input type="file" class="form-control border-0 py-2" name="photo" id="photo">
</div>
<div class="col-12 col-xl-4">
    <label for="pancard" class="custom-file-upload">
        Upload Pancard
    </label>
    <input type="file" class="form-control border-0 py-2" name="pancard" id="pancard">
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary w-100 py-2 px-5">Submit</button>
</div>
                                        </div>
                                    </form>
                                </div>
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
       

       