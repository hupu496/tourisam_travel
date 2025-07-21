<!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5"> 
                    <div class="col-12 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div>
                            <div class="pb-5">
                                <h4 class="text-primary"><?php echo $service['name']; ?></h4>
                                <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        
                                       
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                       
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="bg-light p-5 rounded h-100">
                            <h4 class="text-primary mb-4">Book Your Services</h4>
                               <form action="<?php echo base_url('homeservice/serviceform_save');?>" method="post">
                                <div class="row g-4">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control border-0" name="from_date" id="name" placeholder="Your Name">
                                            <label for="name">From Date</label>
                                        </div>
                                    </div>  
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control border-0" id="to_date" name="to_date" placeholder="Your Email">
                                            <label for="email">To Date</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="hidden" name="service" value="<?php echo $service['name']; ?>">
                                           <!--  <input type="text" class="form-control border-0" id="project" name="service" placeholder="Project"> -->
                                           <select class="form-control" name="sub_service" id="project"> 
  <option value="">Select Sub Service</option>
  <?php 
  if(!empty($subservice)){
    foreach ($subservice as $key => $value) { 
  ?>
    <option value="<?php echo $value['sub_service']; ?>" data-price="<?php echo $value['price']; ?>">
      <?php echo $value['sub_service']; ?>
    </option> 
  <?php 
    }
  } 
  ?>
</select>
                                          
                                        </div>
                                    </div>
                                   <div class="col-lg-12 col-xl-6">
  <div class="form-floating">
    <input type="text" class="form-control border-0" id="phone" name="price" placeholder="Price" readonly>
    <label for="phone">Price</label>
  </div>
</div>
                                    
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 160px"></textarea>
                                            <label for="message">Full Address with pincode</label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-3">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <script>
document.addEventListener('DOMContentLoaded', function() {
  const projectSelect = document.getElementById('project');
  const priceInput = document.getElementById('phone');

  projectSelect.addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const price = selectedOption.getAttribute('data-price');
    
    if (price) {
      priceInput.value = price;
    } else {
      priceInput.value = '';
    }
  });
});
</script>
