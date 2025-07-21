<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/staff/stafflist') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>  Staff List</button>
                        	</a>
                        </div>
                        <!--<div class="pull-right"><a href="" class="btn btn-sm btn-primary"> STAFF LIST </a></div>-->
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/staff/insert_staff');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-6">
                                	<div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="name" value="" id="name" placeholder="" class="form-control" required/>
                                        </div>
                                        </div>
                                      
                                      
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Father Name</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="fname" value="" id="fname" placeholder="" class="form-control" required/>
                                        </div>
                                        </div>
                                 

                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Mobile</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="mobile" value="" id="mobile" placeholder="" class="form-control" required/>
                                        </div>
                                        </div>
                                 

                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Email <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="email" value="" id="email" placeholder="" class="form-control" required/>
                                        </div>
                                        </div>
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Location <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="location" value="" id="location" placeholder="" class="form-control" required/>
                                        </div>
                                        </div>
                                 
                                     
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Work Type <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                         <select name="service_type" type="" id="service_type" class="form-control" >
                                         <option value="">Select Type</option>
                                        <option value="electrician">Electrician</option>
                                         <option value="plumber">Plumber</option>
                                        <option value="carpenter">Carpenter</option>
                                        <option value="ac&refrigerator">AC & Refrigerator</option>
                                        <option value="washingmachine">Washing Machine</option>
                                        <option value="motorpump">Motor Pump</option>
                                         <option value="laundryservice">Laundry Service</option>
                                        <option value="painting">Painting</option>
                                        <option value="cleaning">Cleaning</option>
                                         <option value="pestcontrol">Pest Control</option>
                                        <option value="renovation Work">Renovation Work</option>
                                          <option value="construction">Construction</option>                            
                                         </select>
                                        </div>
                                        </div>
                                      
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Address</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <textarea type="text" name="address" value="" id="address" placeholder="" class="form-control" ></textarea>
                                        </div>
                                        </div>

                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Staff Status <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                         <select name="staff_status" type="" id="staff_status" class="form-control" >
                                         <option value="">Select Status</option>
                                         <option value="active">Active</option>
                                         <option value="busy">Busy</option>
                                         <option value="working">Working</option>
                                         <option value="leave">Leave</option>                              
                                         </select>
                                        </div>
                                        </div>
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Photo<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="file" name="image" value="" id="image" placeholder="image" class="form-control"  required/>
                                        </div>     
                                        <br><br></br>
                                  <div class="row">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-2 text-center"> 
                                    <input type="submit" name="addstaff" value="Add Staff"  class="btn btn-success btn-block btn-md"  />
                                </div>
                            </div>
                        </form>                    
                    </div>
               	</div>
         	</div>
       	</div>
    </section>
    <!-- /.content -->
    <script>
$(document).ready(function(e){	
	function showImage(src,target) {
		var fr=new FileReader();
		// when image is loaded, set the src of the image where you want to display it
		fr.onload = function(e) { target.src = this.result; };
		src.addEventListener("change",function() {
			// fill fr with image data    
			fr.readAsDataURL(src.files[0]);
		});
	}
	var src = document.getElementById("image");
	var target = document.getElementById("target");
	showImage(src,target);
});
</script> 
    