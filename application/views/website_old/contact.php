<!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5"> 
                    <div class="col-12 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div>
                            <div class="pb-5">
                                <h4 class="text-primary">Get in Touch</h4>
                                <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-map-marker-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Address</h4>
                                            <p class="mb-0">Near,Khasida Football maidan, Ghatsila,jharkhand pincode-832303</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Mail Us</h4>
                                            <p class="mb-0">udaanmarketing69@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Telephone</h4>
                                            <p class="mb-0">(+91) 9955876455</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fab fa-firefox-browser fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>udaanmarket.info</h4>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-around bg-light rounded p-4">
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="bg-light p-5 rounded h-100">
                            <h4 class="text-primary mb-4">Send Your Message</h4>
                               <form action="<?php echo base_url('homeservice/contactsave');?>" method="post">
                                <div class="row g-4">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" name="name" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control border-0" id="phone" name="mobile" placeholder="Phone">
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                           <!--  <input type="text" class="form-control border-0" id="project" name="service" placeholder="Project"> -->
                                           <select class="form-control" name="service" id="project"> 
                                            <option>Select Service</option>
                                            <?php if(!empty($service)){
                                                foreach ($service as $key => $value) { ?>
                                    <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option> 
                                       <?php         }
                                            } ?>
                                            
                                           </select>
                                          
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="address" style="height: 160px"></textarea>
                                            <label for="message">Message</label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="rounded">
                            <iframe class="rounded w-100" 
                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
